<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['portfolios'] = Portfolio::all();
        return view('server.management-home.portfolios.index', ['data' => $data]);
    }

    public function create()
    {
        return view('server.management-home.portfolios.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'description' => 'required|min:10',
            'link' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        ]);

        $portfolio = new Portfolio();

        if($request->file('image')) {
            $image = $request->file('image');
            $name  = $image->storeAs('images/portfolios', time().'-portfolio.'.$image->extension());
            $portfolio->image = $name;
        }

        $portfolio->name = $validateData['name'];
        $portfolio->description = $validateData['description'];
        $portfolio->link = $validateData['link'];

        $portfolio->save();

        return redirect()->route('portfolios.index')->with(['create' => 'Portfolio added successfully!']);
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('server.management-home.portfolios.edit', ['portfolio' => $portfolio]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'description' => 'required|min:10',
            'link' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        ]);

        $portfolio = Portfolio::findOrFail($id);

        if($request->file('image')) {
            Storage::delete($portfolio->image);

            $image = $request->file('image');
            $name  = $image->storeAs('images/portfolios', time().'-portfolio.'.$image->extension());
            $portfolio->image = $name;
        }

        $portfolio->name = $validateData['name'];
        $portfolio->description = $validateData['description'];
        $portfolio->link = $validateData['link'];

        $portfolio->save();

        return redirect()->route('portfolios.index')->with(['update' => 'Portfolio added successfully!']);
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        Storage::delete($portfolio->image);
        $portfolio->delete();

        return redirect()->route('portfolios.index')->with(['delete' => 'Portfolio added successfully!']);
    }
}
