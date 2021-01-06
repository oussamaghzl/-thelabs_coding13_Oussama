<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('publique.Accueil');
    }
    public function index2()
    {
        return view('publique.blog');
    }
    public function index21()
    {
        return view('publique.blog-post');
    }
    public function index3()
    {
        return view('publique.services');
    }
    public function index4()
    {
        return view('publique.contact');
    }
}
