<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\Contact;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class WebController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function page(Request $request)
    {
        $slug                = $request->segment(1);
        // $path                = $request->path();

        if($slug == 'about'){
            $dataabout = AboutMe::first();
            return view('about',compact('dataabout'));
            // return view('about');
        }else
        if($slug == 'gallery'){
            return view('gallery');

        }else
        if($slug == 'contact'){

            $datacontact = Contact::first();
            return view('contact',compact('datacontact'));

        }else
        if($slug == 'blog'){
            return view('blog');

        }else
        if($slug == 'detail'){
            return view('detail');

        }else{

            return redirect('/');
        }
    }


    public function contactUs(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pesan' => 'required|string'
        ]);

        $newdata = new ContactUs;
        $newdata->nama=$request->nama;
        $newdata->email=$request->email;
        $newdata->pesan=$request->pesan;
        $newdata->status= 1;
        $newdata->save();
        // Session::flash('sukses','Pesan Anda Telah Terkirim');
        Alert::success('Horayy', 'Message Send Successfully');
        return redirect()->back();

    }

}
