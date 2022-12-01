<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_tamu;
use App\Models\m_tamu2;
use App\Models\Tamu;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Controllers\Illuminate\Support\Collection;

class c_laporan_tamu2 extends Controller
{
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    //     $this->m_tamu = new m_tamu();
    // }

    public function index(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');

            $tamu = DB::table('tamu')
            ->where('swab', 'wajib swab')
            ->get();
            // $data = ['tamu' => $this->m_tamu->allData()];
        if (Auth::check()) {
    
            return view('klinik/v_laporan_pasien_tamu', compact('tamu', 'fromDate', 'toDate'));
        }
    
        else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
        }
    public function filter(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');

        $tamu = DB::table('tamu')
        ->where('tanggal', '>=', $fromDate)
        ->where('tanggal', '<=', $toDate)
        ->where('swab', 'wajib swab')
        ->get();
        
        if (Auth::check()) 
        {
            //check the filter tamu
        if (Auth::user()->level !== 'klinik')
            {
                return back();
            }
            return view('klinik/v_laporan_pasien_tamu',  compact(['tamu','fromDate', 'toDate']));
        }
        
        else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

        


    public function laporan(Request $request)
    {


        $date['datefrom'] = ($request->dari_tanggal. ' 00:00:00');
        $date['datecurrent'] = ($request->sampai_tanggal. ' 23:59:59');
        // var_dump($request);
        // dd();
        // $tamu = tamu::select('tanggal','id_tamu', 'nama_tamu', 'alamat', 'pekerjaan','keperluan','bertemu_dengan','no_ktp','foto_ktp','no_kendaraan','jam_masuk','status','hasil_swab')
        //         ->whereBetween(('tanggal'-> $dari_tanggal, $sampai_tanggal)
        //         ->get();
        // $sum_total = tamu::whereBetween(('tanggal',[$dari_tanggal, $sampai_tanggal])
        // ->sum('total');
        $tamu['tamu'] = DB::table('tamu')->whereBetween('tanggal', [$date['datefrom'], $date['datecurrent']])->get();
        // $tamu['sum'] = DB::table('tamu')->whereBetween('tanggal', [$date['datefrom'], $date['datecurrent']])->sum('total');

        // $tamu['tamu'] = DB::table('tamu')->whereBetween(('tamu.tanggal'->[$dari_tanggal, $sampai_tanggal]))->get();
        // var_dump($data);
        // dd();
        // $data['tamu'] = DB::table('tamu')->where('tanggal', [$date['datefrom'], $date['datecurrent']])->get();
        // $data['nama_tamu'] = DB::table('tamu')->get('nama_tamu');
        // $data['alamat'] = DB::table('tamu')->get('alamat');
        // $data = DB::table('tamu')
        //         ->select('id_tamu','nama_tamu','alamat','pekerjaan','keperluan','bertemu_dengan', 'no_ktp','foto_ktp','no_kendaraan','jam_masuk','status','hasil_swab')
        //         ->get();
    return view('security/cc', $tamu,$date);
    }

    // public function laporantamu ()
    // {
    //     $tamu = DB::table('tamu')
    //     ->select('id_tamu', 'tanggal', 'nama_tamu', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
    //     ->where('status', 'disetujui')
    //     ->get();
    //     if (Auth::check()){
    //         return view('security/v_laporan',  compact(['tamu']));
    //     }
    //     else return redirect()->route('login')->with('eror', 'Silahkan login terlebih dahulu');
    // }

    // public function cetak_tamu(Request $request)
    // {
    //     $tamu = DB::table('tamu')
    //     ->select('id_tamu', 'tanggal', 'nama_tamu', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
    //     ->where('status', 'disetujui')
    //     ->get();
    //     if (Auth::check()){
    //         return view('security/v_cetak_tamu',  compact(['tamu']));
    //     }
    //     else return redirect()->route('login')->with('eror', 'Silahkan login terlebih dahulu');
    
    // }

    // public function cetak_tamu(Request $request)
    // {
    //     $tgl_mulai = $request->tgl_mulai;
    //     $tgl_selesai = $request->tgl_selesai;

    //     if ($tgl_mulai AND $tgl_selesai){
    //         $tamu = DB::table('tamu')
    //                 ->select('id_tamu', 'tanggal', 'nama_tamu', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
    //                 ->where('status', 'disetujui')
    //                 ->whereBetween('tanggal', [$tgl_mulai, $tgl_selesai])
    //                 ->get();
    //     }
    //         else{
    //             $tamu = DB::table('tamu')
    //             ->select('id_tamu', 'tanggal', 'nama_tamu', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
    //             ->where('status', 'disetujui')
    //             ->get();
    //     }
    //     return view ('security/v_cetak_laporan_tamu', compact(['tamu', 'tgl_mulai', 'tgl_selesai']));

    // }
    public function lihatlaporan ($dari_tanggal, $sampai_tanggal)
    {
        // dd (["Dari Tanggal : ".$dari_tanggal, "Sampai Tanggal : ".$sampai_tanggal]);

        $tamu = DB::table('tamu')
        ->select('id_tamu', 'tanggal', 'nama_tamu', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
        ->where('status', 'disetujui')
        ->whereBetween('tamu.tanggal', [$dari_tanggal, $sampai_tanggal])->get();
    return view ('security/v_laporan_tamu', compact(['tamu', 'dari_tanggal', 'sampai_tanggal']));
    }
}
