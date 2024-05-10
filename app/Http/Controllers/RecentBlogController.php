<?php

namespace App\Http\Controllers;

use App\Models\RecentBlog;
use Illuminate\Http\Request;

class RecentBlogController extends Controller
{
    public function index()
    {
        $data = RecentBlog::all();
        return view('admin.recentblog',compact('data'));
    }
}
