<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_dokter;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class c_laporan_dokter extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_dokter = new m_dokter();
    }
    
    public function index()
    {
        $data = ['dokter' => $this->m_dokter->allData()
    ];
    if (Auth::check()) {
        if (Auth::user()->level !== 'klinik')
            {
                return back();
            }
        return view('klinik/v_laporan_dokter', $data);
    
    }
    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }
}
