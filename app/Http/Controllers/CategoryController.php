<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $categories = Category::all();
        return view('server.article.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('server.article.categories.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'   => 'required|unique:categories,name',
        ]);

        $category = new Category();

        $category->name = $validateData['name'];
        $category->slug = \Str::slug($validateData['name']);

        $category->save();

        return redirect()->route('categories.index')->with(['create' => 'Category added successfully!']);
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('server.article.categories.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name'   => 'required|unique:categories,name,'.$id
        ]);

        $category = Category::findOrFail($id);

        $category->name = $validateData['name'];
        $category->slug = \Str::slug($validateData['name']);

        $category->save();

        return redirect()->route('categories.index')->with(['update' => 'Category updated successfully!']);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with(['delete' => 'Category deleted successfully!']);
    }
}
