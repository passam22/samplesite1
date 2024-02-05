<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function our_story()
    {
        return view('our_story');
    }

    public function contact_us()
    {
        return view('contact_us');
    }
}
