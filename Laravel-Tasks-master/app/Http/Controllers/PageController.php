<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }
       public function user($name)
    {
        return view('user', ['username' => $name]);
    }
}
