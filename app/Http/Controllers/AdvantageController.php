<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $image = $request->file('image');
        $name  = $image->storeAs('images/product-advantages', time() . '-advantage.' . $image->extension());
        $advantage->image = $name;

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

        if ($request->file('image')) {
            Storage::delete($advantage->image);

            $image = $request->file('image');
            $name  = $image->storeAs('images/product-advantages', time() . '-advantage.' . $image->extension());
            $advantage->image = $name;
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
        Storage::delete($advantage->image);
        $advantage->delete();

        return redirect()->route('advantages.index')->with(['delete' => 'Advantage deleted successfully!']);
    }
}
