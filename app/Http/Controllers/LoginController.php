<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        // Validasi data yang dikirimkan oleh form login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // $request['password'] = Hash::make($request['password']);

        // Cek credentials user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if($user){
                return redirect()->intended('/dashboard');
            }

        } else {
            return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
        }
    }

    public function logout(){
        auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
