<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\TagsBlog;
use Illuminate\Http\Request;

class TagsBlogController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $data = TagsBlog::all();
        return view('admin.tagsblog.list',compact('data'));
    }

    public function create()
    {
        return view('admin.tagsblog.add');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'tags' => 'required',
        ]);

        $newdata = new TagsBlog;
        $newdata->tags=$request->tags;
        $newdata->save();
        return redirect('admin/tagsblog')->with('success','Data Upload Successfully');


    }


    public function edit($id)
    {
        //untuk mengedit satu data berbentuk objek
        $data = TagsBlog::findOrFail($id);

        //untuk melooping banyak data
        // $datas = Category::where('id',$id)->get();
        // dd($data,$datas);

        return view('admin.tagsblog.edit',compact('data'));
    }



    public function update(Request $request, $id)
    {

        $request->validate([
            'tags' => 'required',
        ]);

        $data=
        [
            'tags'=>$request->tags
        ];

        //contoh deklarasi data banyak dengan bulk data atau memanggil variabel yang telah diberikan rumus
        TagsBlog::where('id',$id)->update($data);

        //contoh deklarasi data sendiri dengan banyak
        // Category::where('id',$id)->update(['nama_category'=>$request->nama_category]);

        return redirect('admin/tagsblog')->with('success','Data Update Successfully');


    }


    public function destroy($id)
    {
        $data = TagsBlog::findOrFail($id);
        $data->delete();
        return redirect('admin/tagsblog')->with('success', 'Data Deleted Successfully ');

    }






}
