<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function index(Users $users)
    {
        $users = $users->all();
        return view('Users.users', compact('users'));
    }


    public function create()
    {
        return view('Users.newUser');
    }


    public function store(Users $user, Request $request)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('users.index');
    }


    public function show(Users $user)
    {
        $user = $user->only([
            'name',
            'email',
            'created_at'
        ]);
     
        return view('Users.userDetails', compact('user'));
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
