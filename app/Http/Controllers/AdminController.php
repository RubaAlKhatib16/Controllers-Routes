<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $adminName = "Ruba";
        $role = "Admin";


         return view('admin.dashboard', compact('adminName','role'));
    }
}
