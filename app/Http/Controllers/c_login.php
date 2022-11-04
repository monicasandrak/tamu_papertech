<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use DB;

class c_login extends Controller
{
    public function login()
    {

         return view('login'); //mengarahkan ke view form login
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            ],[
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            ]);

        if (Auth::attempt($request-> only ('username', 'password'))){
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success','You are now logged in');
        }
        return back()->withErrors([
        'password' => 'Username atau Password salah',
        ]);
        // return redirect ('/login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
            return redirect ('/login');
        }
    }

   