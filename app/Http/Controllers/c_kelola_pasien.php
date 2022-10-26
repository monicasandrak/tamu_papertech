<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_pasien;

class c_kelola_pasien extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_pasien = new m_pasien();
    }

    public function index()
    {

        $data = [
            'pasien' => $this->m_pasien->allData()
        ];
        return view('klinik/v_kelola_pasien', $data);
    }

    public function detail($id_pasien)
    {
        if (!$this->m_pasien->detailData($id_pasien)) {
            abort(404);
        }
        $data = [
            'pasien' => $this->m_pasien->detailData($id_pasien)
        ];
        return view('klinik/v_detail_pasien', $data);
    }

    public function add()
    {
        $id_baru = ['id_baru' => $this->m_pasien->id_baru()];
        $dropdown = ['HRGA (Human Resource and General Affair)','Teknik','Produksi','Logistik','HSE (Human Safety Environment'];
        return view('klinik.v_add_pasien', $id_baru, compact(['dropdown']));
    }

    public function insert()
    {
        Request()->validate([
            'tanggal' => 'required',
            'nama_pasien' => 'required',
            'departement' => 'required',
            'keluhan' => 'required',
            'diagnosa' => 'required',
            'obat' => 'required', 
        ],[
            'tanggal.required' => 'Tanggal wajib diisi !',
            'nama_pasien.required' => 'Nama pasien wajib diisi !',
            'departement.required' => 'Departement wajib diisi !',
            'keluhan.required' => 'Keluhan wajib diisi !',
            'diagnosa.required' => 'Diagnosa wajib diisi !',
            'obat' => 'Obat wajib diisi !',
        ]);
        $dropdown = ['HRGA (Human Resource and General Affair)','Teknik','Produksi','Logistik','HSE (Human Safety Environment'];
        $data = [
            'id_pasien' => Request()->id_pasien,
            'tanggal' => Request()->tanggal,
            'nama_pasien' => Request()->nama_pasien,
            'departement' => Request()->departement,
            'keluhan' => Request()->keluhan,
            'diagnosa' => Request()->diagnosa,
            'obat' => Request()->obat,
        ];
        $this->m_pasien->addData($data);
        $dropdown = ['HRGA (Human Resource and General Affair)','Teknik','Produksi','Logistik','HSE (Human Safety Environment'];
        return redirect()->route('pasien')->with('pesan', 'Data berhasil ditambahkan !');
    }


    public function edit($id_pasien)
    {
        if (!$this->m_pasien->detailData($id_pasien)) {
            abort(404);
        }

        $data = [
            'pasien' => $this->m_pasien->detailData($id_pasien)
        ];
        $dropdown = ['HRGA (Human Resource and General Affair)','Teknik','Produksi','Logistik','HSE (Human Safety Environment'];
        return view('klinik/v_edit_pasien', $data, compact(['dropdown']));
    }

    public function update(Request $request, $id_pasien)
    {
        Request()->validate([
            'tanggal' => 'required',
            'nama_pasien' => 'required',
            'departement' => 'required',
            'keluhan' => 'required',
            'diagnosa' => 'required',
            'obat' => 'required', 
        ], [
            'tanggal.required' => 'Tanggal wajib diisi !',
            'nama_pasien.required' => 'Nama pasien wajib diisi !',
            'departement.required' => 'Departement wajib diisi !',
            'keluhan.required' => 'Keluhan wajib diisi !',
            'diagnosa.required' => 'Diagnosa wajib diisi !',
            'obat.required' => 'Obat wajib diisi !',
        ]);
            $data = [
            'id_pasien' => Request()->id_pasien,
            'tanggal' => Request()->tanggal,
            'nama_pasien' => Request()->nama_pasien,
            'departement' => Request()->departement,
            'keluhan' => Request()->keluhan,
            'diagnosa' => Request()->diagnosa,
            'obat' => Request()->obat,
            ];
            $this->m_pasien->editData($id_pasien,$data);
        
        return redirect()->route('pasien')->with('pesan', 'Data berhasil diupdate !');

    }

    public function delete($id_pasien)
    {
        //hapus atau delete foto
        // $pasien = $this->M_kelola_pasien_pegawai->detailData($id_pasien);
        // if ($dosen->foto_dosen <> "") {
        //     unlink(public_path('foto_dosen') . '/' . $dosen->foto_dosen);
        // }
        $this->m_pasien->deleteData($id_pasien);
        return redirect()->route('pasien')->with('pesan', 'Data berhasil dihapus !');
    }

    public function print()
    {
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        $data = PDF::loadview('v_print', [
            'data' => 'Laporan Data Dosen ' . date('d F Y'),
            'dosen' => $this->M_Dosen->allData()
        ])->setPaper('a4', 'landscape');
        //mendownload laporan.pdf
        return $data->download('laporan.pdf');
    }

    
}
