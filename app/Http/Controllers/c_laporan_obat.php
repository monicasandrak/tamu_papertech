<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_obat;
use DB;

class c_laporan_obat extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_obat = new m_obat();
    }

    public function index()
    {
        $data = ['obats' => $this->m_obats->allData()
    ];
    return view('klinik/v_laporan_klinik', $data);
    }
    public function laporan(Request $request)
    {
        $data = ['obats' => $this->m_obat->allData()];
        
        $date['datefrom'] = ($request->dari_tanggal);
        $date['datecurrent'] = ($request->sampai_tanggal);
        // $data['date'] = DB::table('obats')->whereBetween('tanggal', [$date['datefrom'], $date['datecurrent']])->get();
        // $data['id_obats'] = DB::table('obats')
        // $data = DB::table('obats')
        //         ->select('id_obats','nama_obats','alamat','pekerjaan','keperluan','bertemu_dengan', 'no_ktp','foto_ktp','no_kendaraan','jam_masuk','status','hasil_swab')
        //         ->get();
    return view('klinik/v_print_laporan_obat', $data,$date);
    }
}
