<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function showLogin() {
        return view('login');
    }

    function showSignup() {
        return view('sign-up');
    }

    function signup(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:dns|unique:users',
            'phone' => ['nullable','regex:/^(08)[0-9]{9,14}$/','unique:users'], // Opsional, tapi harus valid
            'password' => 'required|min:6|confirmed',
        ]);
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login');
    }

    function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            // return redirect()->route('welcome');
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.panel');
            } 

            return redirect()->route('welcome');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    function logout(Request $request) {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
