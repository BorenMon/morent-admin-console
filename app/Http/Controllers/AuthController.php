<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        sleep(1);
        
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', ],
        ]);

        $user = User::create($request->only('name', 'email', 'password'));

        auth()->login($user);

        return redirect()->route('home');
    }
}
