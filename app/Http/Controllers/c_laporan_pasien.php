<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_pasien;

use App\Models\pasien;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Controllers\Illuminate\Support\Collection;

class c_laporan_pasien extends Controller
{
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    //     $this->m_pasien = new m_pasien();
    // }

    public function index(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');

            $pasien = DB::table('pasien')
            // ->where('swab', 'wajib swab')
            ->get();
            // $data = ['pasien' => $this->m_pasien->allData()];
        if (Auth::check()) {
    
            return view('klinik/v_laporan_pasien', compact('pasien', 'fromDate', 'toDate'));
        }
    
        else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
        }
    public function filter(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');

        // $hasil_swab = DB::table('pasien')
        //    ->whereNull('hasil_swab');
                

        
        //    $pasien = DB::table('pasien')
        // //    ->where('swab', 'tidak wajib swab')
        //    ->whereNot(function($query){
        //     $query->where('status', 'tidak disetujui')
        //         ->orwhere('hasil_swab', 'positif');
        //    })
        //    ->whereBetween('tanggal', [$fromDate, $toDate])
        //    // ->where('tanggal', '>=', $fromDate)
        //    // ->where('tanggal', '<=', $toDate)
        //    ->get();

        //    $pasien = DB::table('pasien')
           
        //    ->where('swab', 'tidak wajib swab')
        //    ->orWhere(function($query){
        //          $query->where('swab', 'wajib swab')
        //                 ->where('hasil_swab', 'negatif');
        //    })
        //    ->whereBetween('tanggal', [$fromDate, $toDate])
        //    // ->where('tanggal', '>=', $fromDate)
        //    // ->where('tanggal', '<=', $toDate)
        //    ->get();

           $pasien = DB::table('pasien')
           ->where('tanggal', '>=', $fromDate)
           ->where('tanggal', '<=', $toDate)
           
       
           
           ->get();
       
           
           

          
        

        return view('klinik/v_laporan_pasien',  compact(['pasien','fromDate', 'toDate']));

    }
    public function laporan(Request $request)
    {
    //      $data = ['pasien' => $this->m_pasien->allData()
    // ];
        // $this->m_pasien2 = new m_pasien2();
        // $data['id_pasien'] = DB::table('pasien')->get('id_pasien');
        // $dari_tanggal= $request->dari_tanggal;
        // $sampai_tanggal= $request->sampai_tanggal;


        $date['datefrom'] = ($request->dari_tanggal. ' 00:00:00');
        $date['datecurrent'] = ($request->sampai_tanggal. ' 23:59:59');
        // var_dump($request);
        // dd();
        // $pasien = pasien::select('tanggal','id_pasien', 'nama_pasien', 'alamat', 'pekerjaan','keperluan','bertemu_dengan','no_ktp','foto_ktp','no_kendaraan','jam_masuk','status','hasil_swab')
        //         ->whereBetween(('tanggal'-> $dari_tanggal, $sampai_tanggal)
        //         ->get();
        // $sum_total = pasien::whereBetween(('tanggal',[$dari_tanggal, $sampai_tanggal])
        // ->sum('total');
        $pasien['pasien'] = DB::table('pasien')->whereBetween('tanggal', [$date['datefrom'], $date['datecurrent']])->get();
        // $pasien['sum'] = DB::table('pasien')->whereBetween('tanggal', [$date['datefrom'], $date['datecurrent']])->sum('total');

        // $pasien['pasien'] = DB::table('pasien')->whereBetween(('pasien.tanggal'->[$dari_tanggal, $sampai_tanggal]))->get();
        // var_dump($data);
        // dd();
        // $data['pasien'] = DB::table('pasien')->where('tanggal', [$date['datefrom'], $date['datecurrent']])->get();
        // $data['nama_pasien'] = DB::table('pasien')->get('nama_pasien');
        // $data['alamat'] = DB::table('pasien')->get('alamat');
        // $data = DB::table('pasien')
        //         ->select('id_pasien','nama_pasien','alamat','pekerjaan','keperluan','bertemu_dengan', 'no_ktp','foto_ktp','no_kendaraan','jam_masuk','status','hasil_swab')
        //         ->get();
    return view('security/cc', $pasien,$date);
    }

    // public function laporanpasien ()
    // {
    //     $pasien = DB::table('pasien')
    //     ->select('id_pasien', 'tanggal', 'nama_pasien', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
    //     ->where('status', 'disetujui')
    //     ->get();
    //     if (Auth::check()){
    //         return view('security/v_laporan',  compact(['pasien']));
    //     }
    //     else return redirect()->route('login')->with('eror', 'Silahkan login terlebih dahulu');
    // }

    // public function cetak_pasien(Request $request)
    // {
    //     $pasien = DB::table('pasien')
    //     ->select('id_pasien', 'tanggal', 'nama_pasien', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
    //     ->where('status', 'disetujui')
    //     ->get();
    //     if (Auth::check()){
    //         return view('security/v_cetak_pasien',  compact(['pasien']));
    //     }
    //     else return redirect()->route('login')->with('eror', 'Silahkan login terlebih dahulu');
    
    // }

    // public function cetak_pasien(Request $request)
    // {
    //     $tgl_mulai = $request->tgl_mulai;
    //     $tgl_selesai = $request->tgl_selesai;

    //     if ($tgl_mulai AND $tgl_selesai){
    //         $pasien = DB::table('pasien')
    //                 ->select('id_pasien', 'tanggal', 'nama_pasien', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
    //                 ->where('status', 'disetujui')
    //                 ->whereBetween('tanggal', [$tgl_mulai, $tgl_selesai])
    //                 ->get();
    //     }
    //         else{
    //             $pasien = DB::table('pasien')
    //             ->select('id_pasien', 'tanggal', 'nama_pasien', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
    //             ->where('status', 'disetujui')
    //             ->get();
    //     }
    //     return view ('security/v_cetak_laporan_pasien', compact(['pasien', 'tgl_mulai', 'tgl_selesai']));

    // }
    public function lihatlaporan ($dari_tanggal, $sampai_tanggal)
    {
        // dd (["Dari Tanggal : ".$dari_tanggal, "Sampai Tanggal : ".$sampai_tanggal]);

        $pasien = DB::table('pasien')
        ->select('id_pasien', 'tanggal', 'nama_pasien', 'jenis_kelamin', 'umur', 'departement', 'keluhan', 'diagnosa', 'pemeriksa', 'dokter','obat', 'jumlah')
        ->where('status', 'disetujui')
        ->whereBetween('pasien.tanggal', [$dari_tanggal, $sampai_tanggal])->get();
    return view ('klinik/v_laporan_pasien', compact(['pasien', 'dari_tanggal', 'sampai_tanggal']));
    }
}
