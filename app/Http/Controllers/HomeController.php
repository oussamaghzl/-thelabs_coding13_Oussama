<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.home' );
    }
    public function index21()
    {
        $navbar = Navbar::all()[0];
        return view('backend.navbar', compact('navbar'));
    }
    
    // public function index22()
    // {
    //     return view('backend.home');
    // }
}
