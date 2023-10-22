<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

//this code is where an admin can login using a fixed account into login page
        if(Auth::id()){

            $usertype=Auth()->user()->usertype;

            if($usertype == 'admin'){
                return view('admin.adminIndex');
            }

            else if($usertype == 'user'){
                return view('welcome');
            }

            else {
                return redirect()->back();
            }
        }
    }

    
      
  
       

    
}

   
    

