<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['products'] = Product::all();
        return view('server.manage-product.products.index', ['data' => $data]);
    }

    public function create()
    {
        return view('server.manage-product.products.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'image_description' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required|unique:products,name',
            'description' => 'required',
            'link' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        ]);

        $product = new Product();

        $image = $request->file('banner');
        $name  = $image->storeAs('images/products', time() . '-product.' . $image->extension());
        $product->banner = $name;

        $image = $request->file('image_description');
        $name  = $image->storeAs('images/products-description', time() . '-product-description.' . $image->extension());
        $product->image_description = $name;

        $product->name = $validateData['name'];
        $product->description = $validateData['description'];
        $product->link = $validateData['link'];

        $product->save();

        return redirect()->route('products.index')->with(['create' => 'Product added successfully!']);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('server.manage-product.products.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'banner' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'image_description' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'name'   => 'required|unique:products,name,'.$id,
            'description' => 'required',
            'link' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        ]);

        $product = Product::findOrFail($id);

        if ($request->file('banner')) {
            Storage::delete($product->banner);

            $image = $request->file('banner');
            $name  = $image->storeAs('images/products', time() . '-product.' . $image->extension());
            $product->banner = $name;
        }

        if ($request->file('image_description')) {
            Storage::delete($product->image_description);

            $image = $request->file('image_description');
            $name  = $image->storeAs('images/products-description', time() . '-product-description.' . $image->extension());
            $product->image_description = $name;
        }

        $product->name = $validateData['name'];
        $product->description = $validateData['description'];
        $product->link = $validateData['link'];

        $product->save();

        return redirect()->route('products.index')->with(['update' => 'Product edited successfully!']);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        Storage::delete($product->banner);
        Storage::delete($product->image_description);
        $product->delete();

        return redirect()->route('products.index')->with(['delete' => 'Product deleted successfully!']);
    }
}
