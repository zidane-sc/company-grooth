<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $data['teams'] = Team::all();
        return view('server.management-website.teams.index', ['data' => $data]);
    }

    public function create()
    {
        return view('server.management-website.teams.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'position' => 'required',
        ]);

        $team = new Team();

        $image = $request->file('image');
        $name  = $image->storeAs('images/teams', time().'-team.'.$image->extension());
        $team->image = $name;

        $team->name = $validateData['name'];
        $team->position = $validateData['position'];

        $team->save();

        return redirect()->route('teams.index')->with(['create' => 'Team added successfully!']);
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('server.management-website.teams.edit', ['team' => $team]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'position' => 'required',
        ]);

        $team = Team::findOrFail($id);

        if($request->file('image')) {
            Storage::delete($team->image);

            $image = $request->file('image');
            $name  = $image->storeAs('images/teams', time().'-team.'.$image->extension());
            $team->image = $name;
        }

        $team->name = $validateData['name'];
        $team->position = $validateData['position'];

        $team->save();

        return redirect()->route('teams.index')->with(['update' => 'Team edited successfully!']);
    }
}
