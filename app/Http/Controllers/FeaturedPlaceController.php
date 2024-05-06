<?php

namespace App\Http\Controllers;

use App\Models\FeaturedPlace;
use Illuminate\Http\Request;

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


    public function insertdatafeatured(Request $request){

    //     dd($request->all());
    //    $place= FeaturedPlace::create($request->all());
    //     return redirect()->back();

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
        return redirect('/featuredplace')->with('message','Image Upload Successfully');

    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
