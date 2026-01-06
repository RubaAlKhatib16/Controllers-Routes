<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public static $list = [];

    public function index()
    {
        return view('feedback.index', [
            'feedbacks' => self::$list
        ]);
    }

    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        self::$list[] = [
            'name' => $request->name,
            'message' => $request->message
        ];

        return redirect()->route('feedback.index');
    }
}
