<?php

namespace App\Http\Controllers;

use App\SectionOne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionOneController extends Controller
{
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

        if($request->file('image')) {
            $image = $request->file('image');
            $name  = $image->storeAs('images/section-one', time().'-section-one.'.$image->extension());
            $section_one->image = $name;
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

        if($request->file('image')) {
            Storage::delete($section_one->image);

            $image = $request->file('image');
            $name  = $image->storeAs('images/section-one', time().'-section-one.'.$image->extension());
            $section_one->image = $name;
        }

        $section_one->title = $validateData['title'];
        $section_one->description = $validateData['description'];
        $section_one->link = $validateData['link'];

        $section_one->save();

        return redirect()->route('section-one.index')->with(['change' => 'Section One changed successfully!']);
    }
}
