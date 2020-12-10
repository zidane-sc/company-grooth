<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $tags = Tag::all();
        return view('server.article.tags.index', ['tags' => $tags]);
    }

    public function create()
    {
        return view('server.article.tags.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'   => 'required|unique:tags,name',
        ]);

        $tag = new Tag();

        $tag->name = $validateData['name'];
        $tag->slug = \Str::slug($validateData['name']);

        $tag->save();

        return redirect()->route('tags.index')->with(['create' => 'Tag added successfully!']);
    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('server.article.tags.edit', ['tag' => $tag]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name'   => 'required|unique:tags,name,'.$id
        ]);

        $tag = Tag::findOrFail($id);

        $tag->name = $validateData['name'];
        $tag->slug = \Str::slug($validateData['name']);

        $tag->save();

        return redirect()->route('tags.index')->with(['update' => 'Tag updated successfully!']);
    }

    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect()->route('tags.index')->with(['delete' => 'Tag deleted successfully!']);
    }
}
