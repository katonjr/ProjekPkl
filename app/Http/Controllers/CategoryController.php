<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('admin.category',compact('data'));
    }


    public function create()
    {
        return view('admin.addcategory');
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
        return redirect('category')->with('success','Data Upload Successfully');



    }


    public function edit($id)
    {
        //untuk mengedit satu data berbentuk objek
        $data = Category::findOrFail($id);

        //untuk melooping banyak data
        // $datas = Category::where('id',$id)->get();
        // dd($data,$datas);

        return view('admin.editcategory',compact('data'));
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

        return redirect('category')->with('success','Data Update Successfully');


    }

    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();
        return redirect('category')->with('success', 'Data Deleted Successfully ');

    }

    public function show($id)
    {
        //
    }



}
