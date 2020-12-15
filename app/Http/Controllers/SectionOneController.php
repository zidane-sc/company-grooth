<?php

namespace App\Http\Controllers;

use File;
use App\SectionOne;
use Illuminate\Http\Request;

class SectionOneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = SectionOne::first();
        return view('server.management-home.section-one.index', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required',
            'description' => 'required',
            'link' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        ]);

        $section_one = new SectionOne();
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/section-one/');
            $image->move($destinationPath, $name);
            $section_one->image = "backend/images/section-one/".$name;
        }

        $section_one->title = $validateData['title'];
        $section_one->description = $validateData['description'];
        $section_one->link = $validateData['link'];

        $section_one->save();

        return redirect()->route('section-one.index')->with(['change' => 'Section One changed successfully!']);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required',
            'description' => 'required',
            'link' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        ]);

        $section_one = SectionOne::findOrFail($id);

        if ($request->hasFile('image')) {

            // Delete Img
            if ($section_one->image) {
                $image_path = public_path($section_one->image); // Value is not URL but directory file path
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/section-one/');
            $image->move($destinationPath, $name);
            $section_one->image = "backend/images/section-one/".$name;
        }

        $section_one->title = $validateData['title'];
        $section_one->description = $validateData['description'];
        $section_one->link = $validateData['link'];

        $section_one->save();

        return redirect()->route('section-one.index')->with(['change' => 'Section One changed successfully!']);
    }
}
