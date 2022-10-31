<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_pasien;
use DB;

class c_laporan_pegawai extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_pasien = new m_pasien();
    }

    public function index()
    {
        $data = ['pasien' => $this->m_pasien->allData()
    ];
    return view('klinik/v_laporan_klinik', $data);
    }
    public function laporan(Request $request)
    {
        $data = ['pasien' => $this->m_pasien->allData()];
        
        $date['datefrom'] = ($request->dari_tanggal);
        $date['datecurrent'] = ($request->sampai_tanggal);
        $data['date'] = DB::table('pasien')->whereBetween('tanggal', [$date['datefrom'], $date['datecurrent']])->get();
        // $data['id_pasien'] = DB::table('pasien')
        // $data = DB::table('pasien')
        //         ->select('id_pasien','nama_pasien','alamat','pekerjaan','keperluan','bertemu_dengan', 'no_ktp','foto_ktp','no_kendaraan','jam_masuk','status','hasil_swab')
        //         ->get();
    return view('klinik/v_print_laporan_pegawai', $data,$date);
    }
}
