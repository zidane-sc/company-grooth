<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Portfolio;
use App\Team;
use App\VisiMisi;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $data['banners'] = Banner::all();
        $data['visi_misi'] = VisiMisi::first();
        $data['portfolios'] = Portfolio::all();
        $data['teams'] = Team::all();

        return view('client.content.home-frontend', ['data' => $data]);
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
