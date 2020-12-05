<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::first();
        return view('server.manage-contact.index', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'address' => 'required|min:10',
            'latitude' => ['required','regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
            'longitude' => ['required','regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/'],
            'phone' => 'required|regex:/(0)[0-9]{11}/',
            'email' => 'required'
        ]);

        $contact = new Contact();

        $contact->address = $validateData['address'];
        $contact->latitude = $validateData['latitude'];
        $contact->longitude = $validateData['longitude'];
        $contact->phone = $validateData['phone'];
        $contact->email = $validateData['email'];

        $contact->save();

        return redirect()->route('contact.index')->with(['change' => 'Contact changed successfully!']);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'address' => 'required|min:10',
            'latitude' => ['required','regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
            'longitude' => ['required','regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/'],
            'phone' => 'required|regex:/(0)[0-9]{11}/',
            'email' => 'required'
        ]);

        $contact = Contact::findOrFail($id);

        $contact->address = $validateData['address'];
        $contact->latitude = $validateData['latitude'];
        $contact->longitude = $validateData['longitude'];
        $contact->phone = $validateData['phone'];
        $contact->email = $validateData['email'];

        $contact->save();

        return redirect()->route('contact.index')->with(['change' => 'Contact changed successfully!']);
    }
}
