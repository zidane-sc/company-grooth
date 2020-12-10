<?php

namespace App\Http\Controllers;

use App\SectionTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionTwoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['section_twos'] = SectionTwo::all();
        return view('server.management-home.section-two.index', ['data' => $data]);
    }

    public function create()
    {
        return view('server.management-home.section-two.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required',
            'description' => 'required|min:10',
        ]);

        $section_two = new SectionTwo();

        if($request->file('image')) {
            $image = $request->file('image');
            $name  = $image->storeAs('images/section-two', time().'-section-two.'.$image->extension());
            $section_two->image = $name;
        }

        $section_two->title = $validateData['title'];
        $section_two->description = $validateData['description'];

        $section_two->save();

        return redirect()->route('section-two.index')->with(['create' => 'Section Two added successfully!']);
    }

    public function edit($id)
    {
        $section_two = SectionTwo::findOrFail($id);
        return view('server.management-home.section-two.edit', ['section_two' => $section_two]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required',
            'description' => 'required|min:10',
        ]);

        $section_two = SectionTwo::findOrFail($id);

        if($request->file('image')) {
            Storage::delete($section_two->image);

            $image = $request->file('image');
            $name  = $image->storeAs('images/section-two', time().'-section-two.'.$image->extension());
            $section_two->image = $name;
        }

        $section_two->title = $validateData['title'];
        $section_two->description = $validateData['description'];

        $section_two->save();

        return redirect()->route('section-two.index')->with(['update' => 'section$section_two added successfully!']);
    }

    public function destroy($id)
    {
        $section_two = SectionTwo::findOrFail($id);
        Storage::delete($section_two->image);
        $section_two->delete();

        return redirect()->route('section-two.index')->with(['delete' => 'Portfolio added successfully!']);
    }
}
