<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_kendaraan;
use Illuminate\Support\Facades\Auth;
use DB;

class c_laporan_kendaraan extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_kendaraan = new m_kendaraan();
    }
    
    public function index()
    {
        $data = ['kendaraan' => $this->m_kendaraan->allData()
    ];
    if (Auth::check()) {
        if (Auth::user()->level !== 'security')
            {
                return back();
            }
        return view('security/v_laporan_kendaraan', $data);
    
    }
    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }
}
