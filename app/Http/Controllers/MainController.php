<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use App\Contact;
use App\Portfolio;
use App\Post;
use App\SectionOne;
use App\SectionTwo;
use App\Tag;
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

    public function article(Request $request)
    {
        $data['posts'] = Post::where('status', 'PUBLISHED')->paginate(10); 

        if ($request->get('keyword')) {
            $data['posts'] = Post::where('status', 'PUBLISHED')->where('title', 'like', '%' . $request->get('keyword') . '%')->paginate(10); 
        }

        $data['latest'] = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'DESC')->limit(5)->get();
        $data['popular'] = Post::where('status', 'PUBLISHED')->orderBy('view', 'DESC')->limit(5)->get();
        $data['categories'] = Category::all();
        $data['tags'] = Tag::all();
        return view('client.content.article', ['data' => $data]);
    }
    
    public function detail($slug)
    {
        // dd($slug);
        $data['post'] = Post::where('slug', $slug)->firstOrFail();
        $data['latest'] = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'DESC')->limit(5)->get();
        $data['popular'] = Post::where('status', 'PUBLISHED')->orderBy('view', 'DESC')->limit(5)->get();
        $data['post']->view += 1;
        $data['post']->save();
        return view('client.content.detail', ['data' => $data]);
    }

    public function tag($slug)
    {
        $data['posts'] = Post::whereHas('tags', function($q) use($slug) {
            $q->where('slug', $slug);
        })
        ->where('status', 'PUBLISHED')
        ->paginate(10);
        $data['latest'] = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'DESC')->limit(5)->get();
        $data['popular'] = Post::where('status', 'PUBLISHED')->orderBy('view', 'DESC')->limit(5)->get();
        $data['categories'] = Category::all();
        $data['tags'] = Tag::all();
        return view('client.content.article', ['data' => $data]);
    }

    public function category($slug)
    {
        $data['posts'] = Post::whereHas('category', function($q) use($slug) {
            $q->where('slug', $slug);
        })
        ->where('status', 'PUBLISHED')
        ->paginate(10);
        $data['latest'] = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'DESC')->limit(5)->get();
        $data['popular'] = Post::where('status', 'PUBLISHED')->orderBy('view', 'DESC')->limit(5)->get();
        $data['categories'] = Category::all();
        $data['tags'] = Tag::all();
        return view('client.content.article', ['data' => $data]);
    }

    public function contact()
    {
        $data['contact'] = Contact::first();
        return view('client.content.contact-us', ['data' => $data]);
    }
    
}
