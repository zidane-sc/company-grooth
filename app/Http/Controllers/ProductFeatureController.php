<?php

namespace App\Http\Controllers;

use File;
use App\Product;
use App\ProductFeature;
use Illuminate\Http\Request;

class ProductFeatureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $data['features'] = ProductFeature::all();
        $data['products'] = Product::all();

        if ($request->get('product') && $request->get('product') != "All") {
            $data['features'] = ProductFeature::where('product_id', $request->get('product'))->get();
        }

        return view('server.manage-product.features.index', ['data' => $data]);
    }

    public function create()
    {
        $data['products'] = Product::all();
        return view('server.manage-product.features.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'description' => 'required',
            'product_id' => 'required',
        ]);

        $feature = new ProductFeature();

        if ($request->hasFile('image')) {            
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/product-features/');
            $image->move($destinationPath, $name);
            $feature->image = "backend/images/product-features/".$name;
        }

        $feature->name = $validateData['name'];
        $feature->description = json_encode($validateData['description']);
        $feature->product_id = $validateData['product_id'];

        $feature->save();

        return redirect()->route('features.index')->with(['create' => 'Features added successfully!']);
    }

    public function edit($id)
    {
        $data['feature'] = ProductFeature::findOrFail($id);
        $data['description'] = json_decode($data['feature']->description);
        $data['products'] = Product::all();
        return view('server.manage-product.features.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'description' => 'required',
            'product_id' => 'required',
        ]);

        $feature = ProductFeature::findOrFail($id);

        if ($request->hasFile('image')) {

            // Delete Img
            if ($feature->image) {
                $image_path = public_path($feature->image); // Value is not URL but directory file path
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/product-features/');
            $image->move($destinationPath, $name);
            $feature->image = "backend/images/product-features/".$name;
        }

        $feature->name = $validateData['name'];
        $feature->description = $validateData['description'];
        $feature->product_id = $validateData['product_id'];

        $feature->save();

        return redirect()->route('features.index')->with(['update' => 'Feature edited successfully!']);
    }

    public function destroy($id)
    {
        $feature = ProductFeature::findOrFail($id);
        if ($feature->image) {
            $image_path = public_path($feature->image); // Value is not URL but directory file path
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $feature->delete();

        return redirect()->route('features.index')->with(['delete' => 'Feature deleted successfully!']);
    }
}
