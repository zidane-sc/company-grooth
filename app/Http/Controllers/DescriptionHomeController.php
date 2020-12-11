<?php

namespace App\Http\Controllers;

use App\DescriptionHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        if($request->file('image')) {
            $image = $request->file('image');
            $name  = $image->storeAs('images/description', time().'-description.'.$image->extension());
            $description->image = $name;
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

        if($request->file('image')) {
            Storage::delete($description->image);

            $image = $request->file('image');
            $name  = $image->storeAs('images/description', time().'-description.'.$image->extension());
            $description->image = $name;
        }

        $description->description = $validateData['description'];

        $description->save();

        return redirect()->route('description.index')->with(['change' => 'Description changed successfully!']);
    }
}
