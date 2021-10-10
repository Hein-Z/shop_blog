<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Handler\IFTTTHandler;

class UserController extends Controller
{
    public function edit()
    {

        return view('my-profile')->with('user', auth()->user());
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255|unique:users,email,' . auth()->user()->id,
            'password' => 'confirmed|sometimes|nullable|string|max:255|min:8'
        ]);

        $user = auth()->user();
        $input = $request->except('password', 'password_confirmation');

        if (!$request->filled('password')) {
            $user->fill($input)->save();
            return back()->with('success', 'Profile Updated Successfully');
        }

        $user->password = bcrypt($request->password);
        $user->fill($input)->save();

        return back()->with('success', 'Profile and password Updated Successfully');
    }
}
