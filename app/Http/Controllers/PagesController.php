<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() 
    {
        return view('pages.home');
    }

    public function about() 
    {
        return view('pages.about');
    }

    public function books() 
    {
        return view('pages.books');
    }

    public function services() 
    {
        return view('pages.services');
    }

    public function contact() 
    {
        return view('pages.contact');
    }

    public function spotlights() 
    {
        return view('pages.spotlights');
    }

    public function clients() 
    {
        return view('pages.clients');
    }

    public function admin()
    {
        return view('pages.admin');
    }
}
