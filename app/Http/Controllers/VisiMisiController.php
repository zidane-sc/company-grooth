<?php

namespace App\Http\Controllers;

use App\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['visi'] = VisiMisi::first();

        if ($data['visi']) {
            $data['misi'] = json_decode($data['visi']->misi);
        }
        return view('server.management-home.visi-misi.index', ['data' => $data]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $visi_misi = new VisiMisi();

        $visi_misi->visi = $validateData['visi'];
        $visi_misi->misi = json_encode($validateData['misi']);

        $visi_misi->save();

        return redirect()->route('visi-misi.index')->with(['change' => 'Visi And Misi changed successfully!']);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $visi_misi = VisiMisi::findOrFail($id);

        $visi_misi->visi = $validateData['visi'];
        $visi_misi->misi = $validateData['misi'];

        $visi_misi->save();

        return redirect()->route('visi-misi.index')->with(['change' => 'Visi And Misi changed successfully!']);
    }
}
