<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_tamu;
use DB;

class c_laporan_klinik extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_tamu = new m_tamu();
    }

    public function index()
    {
        $data = ['tamu' => $this->m_tamu->allData()
    ];
    return view('klinik/v_laporan_klinik', $data);
    }
    public function laporan(Request $request)
    {
        $data = ['tamu' => $this->m_tamu->allData()];
        
        $date['datefrom'] = ($request->dari_tanggal);
        $date['datecurrent'] = ($request->sampai_tanggal);
        $data['date'] = DB::table('tamu')->whereBetween('tanggal', [$date['datefrom'], $date['datecurrent']])->get();
        // $data['id_tamu'] = DB::table('tamu')
        // $data = DB::table('tamu')
        //         ->select('id_tamu','nama_tamu','alamat','pekerjaan','keperluan','bertemu_dengan', 'no_ktp','foto_ktp','no_kendaraan','jam_masuk','status','hasil_swab')
        //         ->get();
    return view('klinik/v_print_laporan_tamu', $data,$date);
    }
}
