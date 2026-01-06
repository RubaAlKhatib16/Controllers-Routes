<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $title = "Home Page";
        $message = "Welcome to Laravel Controllers";

        return view('home', compact('title', 'message'));
    }

    public function about()
    {
        $title = "About Us";
        $message = "This website is created to practice Laravel Controllers.";

        return view('about', compact('title', 'message'));
    }

    public function contact()
    {
        $title = "Contact Page";
        $message = "You can contact us at: demo@email.com";

        return view('contact', compact('title', 'message'));
    }
}
