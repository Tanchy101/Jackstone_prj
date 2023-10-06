<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminLogin(){
        return view('admin.adminlogin');
    }

    public function AdminIndex(){
        return view('admin.adminIndex');
    }
}


