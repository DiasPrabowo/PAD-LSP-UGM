<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->username)
            ->where('password', $request->password)
            ->first();


        if ($user) {
            Auth::login($user);
            return redirect('/home');
        } else {
            return back()->withErrors(['msg' => 'Username atau password salah.']);
        }
    }
}