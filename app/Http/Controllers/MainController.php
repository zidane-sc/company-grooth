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
        $data['misi'] = json_decode($data['visi_misi']->misi);

        $data['section_one'] = SectionOne::first();
        $data['section_two'] = SectionTwo::all();

        return view('client.content.home-frontend', ['data' => $data]);
    }

    public function portfolio()
    {
        $data['portfolios'] = Portfolio::all();
        return view('client.content.portfolio', ['data' => $data]);
    }

    public function about()
    {

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
    public function detail()
    {
        return view('client.content.detail');
    }
}
