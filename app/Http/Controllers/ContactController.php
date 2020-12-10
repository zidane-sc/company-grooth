<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = Contact::first();
        return view('server.manage-contact.index', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'address' => 'required|min:10',
            'phone' => 'required|regex:/(0)[0-9]{11}/',
            'email' => 'required',
            'link_maps' => 'required',
        ]);

        $contact = new Contact();

        $contact->address = $validateData['address'];
        $contact->phone = $validateData['phone'];
        $contact->email = $validateData['email'];
        $contact->link_maps = $validateData['link_maps'];

        $contact->save();

        return redirect()->route('contact.index')->with(['change' => 'Contact changed successfully!']);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'address' => 'required|min:10',
            'phone' => 'required|regex:/(0)[0-9]{11}/',
            'whatsapp' => 'required|regex:/(0)[0-9]{11}/',
            'email' => 'required',
            'link_maps' => 'required',
        ]);

        $contact = Contact::findOrFail($id);

        $contact->address = $validateData['address'];
        $contact->phone = $validateData['phone'];
        $contact->whatsapp = $validateData['whatsapp'];
        $contact->email = $validateData['email'];
        $contact->link_maps = $validateData['link_maps'];

        $contact->save();

        return redirect()->route('contact.index')->with(['change' => 'Contact changed successfully!']);
    }
}
