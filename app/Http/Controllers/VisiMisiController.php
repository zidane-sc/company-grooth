<?php

namespace App\Http\Controllers;

use App\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisiMisiController extends Controller
{
    public function index()
    {
        $data = VisiMisi::first();
        return view('server.management-website.visi-misi.index', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image_visi' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'visi' => 'required',
            'image_misi' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'misi' => 'required',
        ]);

        $visi_misi = new VisiMisi();

        if($request->file('image_visi')) {
            $image = $request->file('image_visi');
            $name  = $image->storeAs('images/visi-misi', time().'-visi.'.$image->extension());
            $visi_misi->image_visi = $name;
        }

        if($request->file('image_misi')) {
            $image = $request->file('image_misi');
            $name  = $image->storeAs('images/visi-misi', time().'-misi.'.$image->extension());
            $visi_misi->image_misi = $name;
        }

        $visi_misi->visi = $validateData['visi'];
        $visi_misi->misi = $validateData['misi'];

        $visi_misi->save();

        return redirect()->route('visi-misi.index')->with(['change' => 'Visi And Misi changed successfully!']);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'image_visi' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'visi' => 'required',
            'image_misi' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'misi' => 'required',
        ]);

        $visi_misi = VisiMisi::findOrFail($id);

        if($request->file('image_visi')) {
            Storage::delete($visi_misi->image_visi);

            $image = $request->file('image_visi');
            $name  = $image->storeAs('images/visi-misi', time().'-visi.'.$image->extension());
            $visi_misi->image_visi = $name;
        }

        if($request->file('image_misi')) {
            Storage::delete($visi_misi->image_misi);

            $image = $request->file('image_misi');
            $name  = $image->storeAs('images/visi-misi', time().'-misi.'.$image->extension());
            $visi_misi->image_misi = $name;
        }

        $visi_misi->visi = $validateData['visi'];
        $visi_misi->misi = $validateData['misi'];

        $visi_misi->save();

        return redirect()->route('visi-misi.index')->with(['change' => 'Visi And Misi changed successfully!']);
    }
}
