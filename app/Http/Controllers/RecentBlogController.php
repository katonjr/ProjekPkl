<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\RecentBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecentBlogController extends Controller
{
    public function index()
    {
        $data = RecentBlog::get();
        return view('admin.blog.list',compact('data'));
    }


        public function create()
    {

        $datakategori = Category::all();
        // dd(Auth::user());
        return view('admin.blog.add',compact('datakategori'));

    }

    public function store(Request $request)
    {

        // sistem bulk data (dikumpulkan dan dieksekusi bersama)

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads', $filename);
            $image = $filename;
        }

        RecentBlog::create([
            'image' => $image,
            'tanggal' => $request->tanggal,
            'category_id' => $request->category_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'user_id' => Auth::id(),
        ]);

        return redirect('recentblog')->with('success','Data Upload Successfully');
    }


    public function edit($id)
    {
        //untuk mengedit satu data berbentuk objek
        $data           = RecentBlog::findOrFail($id);
        $datakategori   = Category::get();

        //untuk melooping banyak data
        // $datas = Category::where('id',$id)->get();
        // dd($data,$datas);

        return view('admin.blog.edit',compact('data','datakategori'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // dd($request->all());

        $data = RecentBlog::findOrFail($id);

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads', $filename);
            $data->image = $filename;
        }

        $data->tanggal = $request->tanggal;
        $data->category_id = $request->category_id;
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect('recentblog')->with('success','Data Updated Successfully');
    }


    public function destroy($id)
    {
        $data = RecentBlog::findOrFail($id);
        $data->delete();
        return redirect('recentblog')->with('success', 'Data Deleted Successfully ');

    }





 }




