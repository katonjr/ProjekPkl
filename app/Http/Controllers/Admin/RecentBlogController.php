<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Log;
use App\Models\RecentBlog;
use App\Models\TagsBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RecentBlogController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $data = RecentBlog::get();
        return view('admin.blog.list',compact('data'));
    }


        public function create()
    {

        $data = [
            "datakategori"  => Category::all(),
            "datatags"      => TagsBlog::get()
        ];
        // dd(Auth::user());
        return view('admin.blog.add',compact('data'));

    }

    public function store(Request $request)
    {
        // dd (Auth::user()->id);

        // sistem bulk data (dikumpulkan dan dieksekusi bersama)

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            // 'tags_id' => 'required|exists:tags_blog,id',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string'
        ]);

        $tags       = implode(",",$request->tags_id);
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads', $filename);
            $image = $filename;
        }

       $blog = RecentBlog::create([
            'image' => $image,
            'tanggal' => $request->tanggal,
            'category_id' => $request->category_id,
            // 'tags_id' => $tags,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul,"-"),
            'deskripsi' => $request->deskripsi,
            'user_id' => Auth::id(),
        ]);

        $tags = [];

        foreach ($request->tags_id as $tagName) {
            $tag = TagsBlog::where('tags', $tagName)->first();

            if ($tag) {
                $tags[] = $tag->id;
            }

            if (!$tag) {
                $tag = new TagsBlog();
                $tag->tags = $tagName;
                $tag->save();

                $tags[] = $tag->id;
            }
        }

        $blogLog = RecentBlog::with('tags')->find($blog->id);

        $log = new Log();
        $log->nama_table = 'recent_blogs';
        $log->items = json_encode($blogLog);
        $log->deskripsi = 'Create Blog Content';
        $log->type = 'create';
        $log->user_id = Auth::user()->id;
        $log->save();

        $blog->tags()->sync($tags);

        return redirect()->route('recentblog.index')->with('success','Data Upload Successfully');
    }


    public function edit($id)
    {
        //untuk mengedit satu data berbentuk objek
        $data           = RecentBlog::findOrFail($id);
        $datakategori   = Category::get();
        $datatag        = TagsBlog::get();

        $valtags        = explode(",", $data->tags_id);
        //untuk melooping banyak data
        // $datas = Category::where('id',$id)->get();
        // dd($data,$datas);

        // $labeltag = explode();
        return view('admin.blog.edit',compact('data','datakategori','datatag','valtags'));
    }



    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'tanggal' => 'required|date',
    //         'category_id' => 'required|exists:categories,id',
    //         // 'tags_id' => 'required|exists:tags_blog,id',
    //         'judul' => 'required|string|max:255',
    //         'deskripsi' => 'required|string',
    //     ]);

    //     // dd($request->all());

    //     $data = RecentBlog::findOrFail($id);

    //     if($request->hasFile('image'))
    //     {
    //         $file = $request->file('image');
    //         $extenstion = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extenstion;
    //         $file->move('uploads', $filename);
    //         $data->image = $filename;
    //     }

    //     $data->tanggal = $request->tanggal;
    //     $data->category_id = $request->category_id;
    //     // $data->tags_id = $request->tags_id;
    //     $data->judul = $request->judul;
    //     $data->deskripsi = $request->deskripsi;
    //     $data->save();

    //     $tags = [];

    //     foreach ($request->tags_id as $tagName) {
    //         $tag = TagsBlog::where('tags', $tagName)->first();

    //         if ($tag) {
    //             $tags[] = $tag->id;
    //         }

    //         if (!$tag) {
    //             $tag = new TagsBlog();
    //             $tag->tags = $tagName;
    //             $tag->save();

    //             $tags[] = $tag->id;
    //         }
    //     }

    //     $blogLog = RecentBlog::with('tags')->find($data->id);

    //     $log = new Log();
    //     $log->nama_table = 'recent_blogs';
    //     $log->items = json_encode($blogLog);
    //     $log->deskripsi = 'Update Blog Content';
    //     $log->type = 'update';
    //     $log->user_id = Auth::user()->id;
    //     $log->save();

    //     $data->tags()->sync($tags);

    //     return redirect()->route('recentblog.index')->with('success','Data Updated Successfully');
    // }

    public function update(Request $request, $id)
{
    $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'tanggal' => 'required|date',
        'category_id' => 'required|exists:categories,id',
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
    ]);

    $data = RecentBlog::findOrFail($id);

    if($request->hasFile('image'))
    {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads', $filename);
        $data->image = $filename;
    }

    $data->tanggal = $request->tanggal;
    $data->category_id = $request->category_id;
    $data->judul = $request->judul;
    $data->deskripsi = $request->deskripsi;
    $data->save();

    $tags = [];

    foreach ($request->tags_id as $tagName) {
        $tag = TagsBlog::firstOrCreate(['tags' => $tagName]);
        $tags[] = $tag->id;
    }

    $data->tags()->sync($tags);

    // Mencatat update
    $blogLog = RecentBlog::with('tags')->find($data->id);

    $log = new Log();
    $log->nama_table = 'recent_blogs';
    $log->items = json_encode($blogLog);
    $log->deskripsi = 'Update Blog Content';
    $log->type = 'update';
    $log->user_id = Auth::user()->id;
    $log->save();

    return redirect()->route('recentblog.index')->with('success', 'Data Updated Successfully');
}


    public function destroy($id)
    {
        $data = RecentBlog::findOrFail($id);
        $data->delete();

        $log = new Log();
        $log->nama_table = 'recent_blogs';
        $log->items = json_encode($data);
        $log->deskripsi = 'Delete Blog Content';
        $log->type = 'delete';
        $log->user_id = Auth::user()->id;
        $log->save();
        return redirect()->route('recentblog.index')->with('success', 'Data Deleted Successfully ');

    }





 }




