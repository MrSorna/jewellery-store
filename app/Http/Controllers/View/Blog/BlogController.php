<?php

namespace App\Http\Controllers\View\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        return view('site.blog.list');
    }

    public function post(Request $request)
    {
        return view('site.blog.details');
    }

}
