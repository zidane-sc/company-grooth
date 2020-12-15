<?php

namespace App\Http\Controllers;

use File;
use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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

        if ($request->hasFile('thumbnail')) {            
            $image = $request->file('thumbnail');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/thumbnails/');
            $image->move($destinationPath, $name);
            $post->thumbnail = "backend/images/thumbnails/".$name;
        }

        $post->save();
        $post->tags()->attach($validateData['tags_id']);

        return redirect()->route('posts.index')->with(['create' => 'Post added successfully!']);
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move(public_path('articles'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('articles/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
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

        if ($request->hasFile('thumbnail')) {

            // Delete Img
            if ($post->thumbnail) {
                $image_path = public_path($post->thumbnail); // Value is not URL but directory file path
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            
            $image = $request->file('thumbnail');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/thumbnails/');
            $image->move($destinationPath, $name);
            $post->thumbnail = "backend/images/thumbnails/".$name;
        }

        $post->save();
        $post->tags()->sync($validateData['tags_id']);

        return redirect()->route('posts.index')->with(['update' => 'Post Edited successfully!']);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if ($post->thumbnail) {
            $image_path = public_path($post->thumbnail); // Value is not URL but directory file path
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $post->tags()->detach();
        $post->delete();

        return redirect()->route('posts.index')->with(['delete' => 'Post Deleted successfully!']);
    }
}
