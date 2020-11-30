<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('client.content.home-frontend');
    }
    public function about()
    {
        return view('client.content.about');
    }
    public function blog()
    {
        return view('client.content.blog');
    }
    public function contact()
    {
        return view('client.content.contact-us');
    }
}
