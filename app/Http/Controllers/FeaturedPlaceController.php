<?php

namespace App\Http\Controllers;

use App\Models\FeaturedPlace;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FeaturedPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FeaturedPlace::all();
        return view('admin.featuredplace',compact('data'));
    }

    public function addfeaturedplace(){
        return view('admin.addfeaturedplace');
    }


    // upload image function
    public function insertdatafeatured(Request $request){

    //     dd($request->all());
    //    $place= FeaturedPlace::create($request->all());
    //     return redirect()->back();

    $request->validate([
        'tempat' => 'required',
        'deskripsi' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:500', // Validasi untuk tipe dan ukuran gambar
    ]);

        $FeaturedPlace = new FeaturedPlace;
        $FeaturedPlace->tempat = $request->input('tempat');
        $FeaturedPlace->deskripsi = $request->input('deskripsi');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads', $filename);
            $FeaturedPlace->image = $filename;
        }

        $FeaturedPlace->save();
        return redirect('featured/featuredplace')->with('success','Image Upload Successfully');

    }


    // Tampil Data Function
    public function tampildatafeatured($id){
    $data = FeaturedPlace::find($id);
    // dd($data);
    return view('admin.viewfeaturedplace', compact('data'));
    }


    //Update Data Function
    public function updatedatafeatured(Request $request, $id){
        $FeaturedPlace = FeaturedPlace::find($id);
        $FeaturedPlace->tempat = $request->input('tempat');
        $FeaturedPlace->deskripsi = $request->input('deskripsi');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads', $filename);
            $FeaturedPlace->image = $filename;
        }

        $FeaturedPlace->save();

        return redirect('featured/featuredplace')->with('success','Data Update Successfully');


    }



    //Delete Data

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $featuredPlace = FeaturedPlace::findOrFail($id);
        $featuredPlace->delete();
        return redirect('featured/featuredplace')->with('success', 'Data Successfully Deleted');
    }

}
