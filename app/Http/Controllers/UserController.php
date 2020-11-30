<?php

namespace App\Http\Controllers;

use App\User;
Use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $data['users'] = User::orderby('id', 'asc')->get();
        return view('server.users.index', ['data' => $data]);
    }

    public function create()
    {
        return view('server.users.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'   => 'required|min:3',
            'email'   => 'required|unique:users,email',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $validateData['name'];
        $user->email = $validateData['email'];
        $user->password = Hash::make($validateData['password']);

        if($request->file('avatar')){
            $image = $request->file('avatar');
            $name  = $image->storeAs('images/users', time().'.'.$image->extension());
            $user->avatar = $name;
        }

        $user->save();

        return redirect()->route('users.index')->with(['create' => 'Admin added successfully!']);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('server.users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name'   => 'required|min:3',
            'email'   => 'required|unique:users,email,'.$id,
        ]);

        $user = User::findOrFail($id);

        $user->name = $validateData['name'];
        $user->email = $validateData['email'];

        if($request->file('avatar')){
            Storage::delete($user->avatar);

            $image = $request->file('avatar');
            $name  = $image->storeAs('images/users', time().'.'.$image->extension());
            $user->avatar = $name;
        }

        $user->save();

        return redirect()->route('users.index')->with(['update' => 'Admin edited successfully!']);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        Storage::delete($user->avatar);
        $user->delete();

        return redirect()->route('users.index')->with('delete', 'Admin deleted successfully!');
    }
}
