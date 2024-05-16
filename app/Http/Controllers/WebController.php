<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

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
            // $dataAbout = AboutMe::first();
            // return view('about',compact('dataAbout'));
            return view('about');
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

        }else{

            return redirect('/');
        }
    }
}
