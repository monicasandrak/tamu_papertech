<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_security;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class c_laporan_security extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_security = new m_security();
    }
    
    public function index()
    {
        $data = ['security' => $this->m_security->allData()
    ];
    if (Auth::check()) {
        if (Auth::user()->level !== 'security')
            {
                return back();
            }
        return view('security/v_lap', $data);
    
    }
    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }
}
