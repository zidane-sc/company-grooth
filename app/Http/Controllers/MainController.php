<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('client.content.home-frontend');
    }
    public function portfolio()
    {
        return view('client.content.portfolio');
    }
    public function about()
    {
        return view('client.content.about');
    }
    public function article()
    {
        return view('client.content.article');
    }
    public function contact()
    {
        return view('client.content.contact-us');
    }
}
