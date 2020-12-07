<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('server.article.posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        $data['categories'] = Category::all();
        $data['tags'] = Tag::all();

        return view('server.article.posts.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title'   => 'required',
            'content' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'status' => 'required|in:DRAFTED,PUBLISHED',
            'category_id' => 'required',
            'tags_id' => 'required',
        ]);

        $post = new Post();

        $post->user_id = Auth::user()->id;
        $post->category_id = $validateData['category_id'];
        $post->title = $validateData['title'];
        $post->slug = \Str::slug($validateData['title']);
        $post->content = $validateData['content'];
        $post->status = $validateData['status'];

        if($request->file('thumbnail')) {
            $image = $request->file('thumbnail');
            $name  = $image->storeAs('images/thumbnails', time().$image->extension());
            $post->thumbnail = $name;
        }

        $post->save();
        $post->tags()->attach($validateData['tags_id']);

        return redirect()->route('posts.index')->with(['create' => 'Post added successfully!']);
    }

    public function edit($id)
    {
        $data['post'] = Post::findOrFail($id);
        $data['categories'] = Category::all();
        $data['tags'] = Tag::all();
        return view('server.article.posts.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title'   => 'required',
            'content' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'status' => 'required|in:DRAFTED,PUBLISHED',
            'category_id' => 'required',
            'tags_id' => 'required',
        ]);

        $post = Post::findOrFail($id);

        $post->user_id = Auth::user()->id;
        $post->category_id = $validateData['category_id'];
        $post->title = $validateData['title'];
        $post->slug = \Str::slug($validateData['title']);
        $post->content = $validateData['content'];
        $post->status = $validateData['status'];

        if($request->file('thumbnail')) {
            Storage::delete($post->thumbnail);

            $image = $request->file('thumbnail');
            $name  = $image->storeAs('images/thumbnails', time().$image->extension());
            $post->thumbnail = $name;
        }

        $post->save();
        $post->tags()->sync($validateData['tags_id']);

        return redirect()->route('posts.index')->with(['update' => 'Post Edited successfully!']);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->tags()->detach();
        $post->delete();

        return redirect()->route('posts.index')->with(['delete' => 'Post Deleted successfully!']);
    }
}
