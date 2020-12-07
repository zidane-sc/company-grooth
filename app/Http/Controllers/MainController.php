<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Portfolio;
use App\SectionOne;
use App\SectionTwo;
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
        $data['section_one'] = SectionOne::first();
        $data['section_two'] = SectionTwo::first();

        return view('client.content.home-frontend', ['data' => $data]);
    }

    public function portfolio()
    {

        return view('client.content.portfolio');
    }

    public function about()
    {
        $data['visi_misi'] = VisiMisi::first();
        $data['portfolios'] = Portfolio::all();
        $data['teams'] = Team::all();
        return view('client.content.about', ['data' => $data]);
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
