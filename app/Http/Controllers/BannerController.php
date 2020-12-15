<?php

namespace App\Http\Controllers;

use File;
use App\Banner;
use Illuminate\Http\Request;

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

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/banners/');
            $image->move($destinationPath, $name);
            $banner->image = "backend/images/banners/".$name;
        }

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

        if ($request->hasFile('image')) {

            // Delete Img
            if ($banner->image) {
                $image_path = public_path($banner->image); // Value is not URL but directory file path
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/banners/');
            $image->move($destinationPath, $name);
            $banner->image = "backend/images/banners/".$name;
        }

        $banner->description = $request->get('description');

        $banner->save();

        return redirect()->route('banners.index')->with(['update' => 'Banner edited successfully!']);
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        if ($banner->image) {
            $image_path = public_path($banner->image); // Value is not URL but directory file path
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $banner->delete();

        return redirect()->route('banners.index')->with(['delete' => 'Banner deleted successfully!']);
    }
}
