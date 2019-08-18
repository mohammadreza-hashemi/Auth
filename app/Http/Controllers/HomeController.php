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
    public function __construct()//function frist read for all method
    {
        $this->middleware('admin',['only'=>'index']);
        $this->middleware('auth');
//        $this->middleware('auth',['only'=>'index','show','create']);
//        $this->middleware('auth',['except'=>'index','show','create']);
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
