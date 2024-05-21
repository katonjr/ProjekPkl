<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destiny;
use Illuminate\Http\Request;

class DestinyController extends Controller
{
    public function index()
    {
        $data = Destiny::get();
        return view('admin.destiny.list',compact('data'));
    }

    public function create(){
        return view('admin.destiny.add');
    }

    public function store(Request $request)
    {

        // sistem bulk data (dikumpulkan dan dieksekusi bersama)

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string'
        ]);

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads', $filename);
            $image = $filename;
        }

        Destiny::create([
            'image' => $image,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('destiny.index')->with('success','Data Upload Successfully');
    }


    public function edit($id)
    {
        //untuk mengedit satu data berbentuk objek
        $data           = Destiny::findOrFail($id);

        return view('admin.destiny.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string'
        ]);

        // dd($request->all());

        $data = Destiny::findOrFail($id);

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads', $filename);
            $data->image = $filename;
        }

        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect()->route('destiny.index')->with('success','Data Updated Successfully');
    }

    public function destroy($id)
    {
        $data = Destiny::findOrFail($id);
        $data->delete();
        return redirect()->route('destiny.index')->with('success', 'Data Deleted Successfully ');

    }


}
