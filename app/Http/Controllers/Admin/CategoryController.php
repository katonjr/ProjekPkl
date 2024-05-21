<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $data = Category::all();
        return view('admin.category.list',compact('data'));
    }


    public function create()
    {
        return view('admin.category.add');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_category' => 'required|unique:categories',
        ]);

        $newdata = new Category;
        $newdata->nama_category=$request->nama_category;
        $newdata->save();
        return redirect('admin/category')->with('success','Data Upload Successfully');



    }


    public function edit($id)
    {
        //untuk mengedit satu data berbentuk objek
        $data = Category::findOrFail($id);

        //untuk melooping banyak data
        // $datas = Category::where('id',$id)->get();
        // dd($data,$datas);

        return view('admin.category.edit',compact('data'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'nama_category' => 'required|unique:categories',
        ]);

        $data=[
            'nama_category'=>$request->nama_category
        ];

        //contoh deklarasi data banyak dengan bulk data atau memanggil variabel yang telah diberikan rumus
        Category::where('id',$id)->update($data);

        //contoh deklarasi data sendiri dengan banyak
        // Category::where('id',$id)->update(['nama_category'=>$request->nama_category]);

        return redirect('admin/category')->with('success','Data Update Successfully');


    }

    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();
        return redirect('admin/category')->with('success', 'Data Deleted Successfully ');

    }

    public function show($id)
    {
        //
    }



}