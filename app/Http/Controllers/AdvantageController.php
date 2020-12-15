<?php

namespace App\Http\Controllers;

use File;
use App\Advantage;
use App\Product;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data['advantages'] = Advantage::all();
        $data['products'] = Product::all();

        if ($request->get('product') && $request->get('product') != "All") {
            $data['advantages'] = Advantage::where('product_id', $request->get('product'))->get();
        }

        return view('server.manage-product.advantages.index', ['data' => $data]);
    }

    public function create()
    {
        $data['products'] = Product::all();
        return view('server.manage-product.advantages.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'description' => 'required',
            'product_id' => 'required',
        ]);

        $advantage = new Advantage();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/product-advantages/');
            $image->move($destinationPath, $name);
            $advantage->image = "backend/images/product-advantages/".$name;
        }

        $advantage->name = $validateData['name'];
        $advantage->description = $validateData['description'];
        $advantage->product_id = $validateData['product_id'];

        $advantage->save();

        return redirect()->route('advantages.index')->with(['create' => 'Advantage added successfully!']);
    }

    public function edit($id)
    {
        $data['advantage'] = Advantage::findOrFail($id);
        $data['products'] = Product::all();
        return view('server.manage-product.advantages.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'description' => 'required',
            'product_id' => 'required',
        ]);

        $advantage = Advantage::findOrFail($id);

        if ($request->hasFile('image')) {

            // Delete Img
            if ($advantage->image) {
                $image_path = public_path($advantage->image); // Value is not URL but directory file path
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/product-advantages/');
            $image->move($destinationPath, $name);
            $advantage->image = "backend/images/product-advantages/".$name;
        }

        $advantage->name = $validateData['name'];
        $advantage->description = $validateData['description'];
        $advantage->product_id = $validateData['product_id'];

        $advantage->save();

        return redirect()->route('advantages.index')->with(['update' => 'Advantage edited successfully!']);
    }

    public function destroy($id)
    {
        $advantage = Advantage::findOrFail($id);
        if ($advantage->image) {
            $image_path = public_path($advantage->image); // Value is not URL but directory file path
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $advantage->delete();

        return redirect()->route('advantages.index')->with(['delete' => 'Advantage deleted successfully!']);
    }
}
