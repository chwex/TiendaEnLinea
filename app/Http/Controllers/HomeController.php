<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
<<<<<<< HEAD
    public function admin(){
      return view('admin_template');
  }
=======

    public function inicio()
    {
        return view('inicio');
    }
>>>>>>> 1e07b54210f79ed24c5ed7a3d229f823918a5b3c
}
