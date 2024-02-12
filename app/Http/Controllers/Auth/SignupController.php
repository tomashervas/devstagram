<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SignupController extends Controller
{
    public function index()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        $request->request->add([
            'username' => Str::slug($request->username),
        ]);

        $this->validate($request, [
            'name' => 'required|min:3|max:120',
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|unique:users|email',
            //'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password
        // ]);
        auth()->attempt($request->only('email', 'password'));
        //dd($request->all());
        return redirect()->route('posts.index', auth()->user()->username);
    }
}
