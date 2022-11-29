<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_perawat;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class c_laporan_perawat extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_perawat = new m_perawat();
    }
    
    public function index()
    {
        $data = ['perawat' => $this->m_perawat->allData()
    ];
    if (Auth::check()) {
        if (Auth::user()->level !== 'perawat')
            {
                return back();
            }
        return view('klinik/v_laporan_perawat', $data);
    
    }
    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }
}
