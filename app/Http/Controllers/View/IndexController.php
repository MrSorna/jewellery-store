<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(Request $request)
    {
        return view('site.index');
    }


    public function contact(Request $request)
    {
        return view('site.contact_us');
    }

    public function faq(Request $request)
    {
        return view('site.faq');
    }
}
