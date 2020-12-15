<?php

namespace App\Http\Controllers;

use File;
use App\Product;
use Illuminate\Http\Request;

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

        if ($request->hasFile('banner')) {
            $image = $request->file('banner');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/products/');
            $image->move($destinationPath, $name);
            $product->banner = "backend/images/products/".$name;
        }

        if ($request->hasFile('image_description')) {
            $image = $request->file('image_description');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/products-description/');
            $image->move($destinationPath, $name);
            $product->image_description = "backend/images/products-description/".$name;
        }

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

        if ($request->hasFile('banner')) {

            // Delete Img
            if ($product->banner) {
                $image_path = public_path($product->banner); // Value is not URL but directory file path
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            
            $image = $request->file('banner');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/products/');
            $image->move($destinationPath, $name);
            $product->banner = "backend/images/products/".$name;
        }

        if ($request->hasFile('image_description')) {

            // Delete Img
            if ($product->image_description) {
                $image_path = public_path($product->image_description); // Value is not URL but directory file path
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            
            $image = $request->file('image_description');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/products-description/');
            $image->move($destinationPath, $name);
            $product->image_description = "backend/images/products-description/".$name;
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
        if ($product->banner) {
            $image_path = public_path($product->banner); // Value is not URL but directory file path
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        if ($product->image_description) {
            $image_path = public_path($product->image_description); // Value is not URL but directory file path
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $product->delete();

        return redirect()->route('products.index')->with(['delete' => 'Product deleted successfully!']);
    }
}
