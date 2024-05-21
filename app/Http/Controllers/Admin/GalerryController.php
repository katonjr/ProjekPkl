<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galerry;
use Illuminate\Http\Request;

class GalerryController extends Controller
{
    public function index()
    {
        $data = Galerry::get();
        return view('admin.galerry.list',compact('data'));
    }

    public function create(){
        return view('admin.galerry.add');
    }


    public function store(Request $request)
    {

        // sistem bulk data (dikumpulkan dan dieksekusi bersama)

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads', $filename);
            $image = $filename;
        }

        Galerry::create([
            'image' => $image,
        ]);

        return redirect()->route('galerry.index')->with('success','Data Upload Successfully');
    }

    public function edit($id)
    {
        //untuk mengedit satu data berbentuk objek
        $data           = Galerry::findOrFail($id);

        return view('admin.galerry.edit',compact('data'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // dd($request->all());

        $data = Galerry::findOrFail($id);

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads', $filename);
            $data->image = $filename;
        }

        $data->save();

        return redirect()->route('galerry.index')->with('success','Data Updated Successfully');
    }


    public function destroy($id)
    {
        $data = Galerry::findOrFail($id);
        $data->delete();
        return redirect()->route('galerry.index')->with('success', 'Data Deleted Successfully ');

    }



}

