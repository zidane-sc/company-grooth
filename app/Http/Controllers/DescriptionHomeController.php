<?php

namespace App\Http\Controllers;

use File;
use App\DescriptionHome;
use Illuminate\Http\Request;

class DescriptionHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = DescriptionHome::first();
        return view('server.management-home.description.index', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'required',
        ]);

        $description = new DescriptionHome();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/description/');
            $image->move($destinationPath, $name);
            $description->image = "backend/images/description/".$name;
        }

        $description->description = $validateData['description'];

        $description->save();

        return redirect()->route('description.index')->with(['change' => 'Description changed successfully!']);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'required',
        ]);

        $description = DescriptionHome::findOrFail($id);

        if ($request->hasFile('image')) {

            // Delete Img
            if ($description->image) {
                $image_path = public_path($description->image); // Value is not URL but directory file path
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/description/');
            $image->move($destinationPath, $name);
            $description->image = "backend/images/description/".$name;
        }

        $description->description = $validateData['description'];

        $description->save();

        return redirect()->route('description.index')->with(['change' => 'Description changed successfully!']);
    }
}
