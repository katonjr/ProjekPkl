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
        $data = RecentBlog::all();
        return view('admin.recentblog',compact('data'));
    }


        public function create()
    {

        $datakategori = Category::all();
        // dd(Auth::user());
        return view('admin.addrecentblog',compact('datakategori'));

    }

    public function store(Request $request)
    {
        dd($request->all());



    }








}
