<?php

namespace App\Http\Controllers;

use File;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['teams'] = Team::all();
        return view('server.management-home.teams.index', ['data' => $data]);
    }

    public function create()
    {
        return view('server.management-home.teams.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
        ]);

        $team = new Team();

        if ($request->hasFile('image')) {            
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/teams/');
            $image->move($destinationPath, $name);
            $team->image = "backend/images/teams/".$name;
        }

        $team->name = $validateData['name'];
        $team->position = $validateData['position'];
        $team->description = $validateData['description'];

        $team->save();

        return redirect()->route('teams.index')->with(['create' => 'Team added successfully!']);
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('server.management-home.teams.edit', ['team' => $team]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
        ]);

        $team = Team::findOrFail($id);

        if ($request->hasFile('image')) {

            // Delete Img
            if ($team->image) {
                $image_path = public_path($team->image); // Value is not URL but directory file path
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/teams/');
            $image->move($destinationPath, $name);
            $team->image = "backend/images/teams/".$name;
        }

        $team->name = $validateData['name'];
        $team->position = $validateData['position'];
        $team->description = $validateData['description'];

        $team->save();

        return redirect()->route('teams.index')->with(['update' => 'Team edited successfully!']);
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        if ($team->image) {
            $image_path = public_path($team->image); // Value is not URL but directory file path
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $team->delete();

        return redirect()->route('teams.index')->with(['delete' => 'Team deleted successfully!']);
    }
}
