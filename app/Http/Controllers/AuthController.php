<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'avatar' => ['file', 'nullable', 'max:300'],
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', ],
        ]);

        if ($request->hasFile('avatar')) {
            $data['avatar'] = Storage::disk('public')->put('avatars', $request->avatar);
        }

        $user = User::create($data);

        auth()->login($user);

        return redirect()->route('dashboard')->with('message', 'Welcome to Laravel Inertia Vue App');
    }

    public function login(Request $request) 
    {
        $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
