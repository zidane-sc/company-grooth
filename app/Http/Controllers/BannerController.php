<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $banners = Banner::all();
        return view('server.management-home.banners.index', ['banners' => $banners]);
    }

    public function create()
    {
        return view('server.management-home.banners.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $banner = new Banner();

        $image = $validateData['image'];
        $name  = $image->storeAs('images/banners', time().'.'.$image->extension());

        $banner->image = $name;
        $banner->description = $request->get('description') ?? "-";

        $banner->save();

        return redirect()->route('banners.index')->with(['create' => 'Banner added successfully!']);
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('server.management-home.banners.edit', ['banner' => $banner]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $banner = Banner::findOrFail($id);

        if($request->file('image')){
            Storage::delete($banner->image);

            $image = $request->file('image');
            $name  = $image->storeAs('images/banners', time().'.'.$image->extension());
            $banner->image = $name;
        }

        $banner->description = $request->get('description');

        $banner->save();

        return redirect()->route('banners.index')->with(['update' => 'Banner edited successfully!']);
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        Storage::delete($banner->image);
        $banner->delete();

        return redirect()->route('banners.index')->with(['delete' => 'Banner deleted successfully!']);
    }
}
