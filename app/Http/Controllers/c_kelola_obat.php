<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_obat;

class c_kelola_obat extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_obat = new m_obat();
    }

    public function index()
    {

        $data = [
            'obats' => $this->m_obat->allData()
        ];
        return view('klinik/v_kelola_obat', $data);
    }

    public function detail($id_obat)
    {
        if (!$this->m_obat->detailData($id_obat)) {
            abort(404);
        }
        $data = [
            'obats' => $this->m_obat->detailData($id_obat)
        ];
        return view('klinik/v_detail_obat', $data);
    }

    public function add()
    {
        $id_baru = ['id_baru' => $this->m_obat->id_baru()];
        $dropdown = ['Kapsul','Tablet','Sirup'];
        return view('klinik.v_add_obat', $id_baru, compact(['dropdown']));
    }

    public function insert()
    {
        Request()->validate([
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'satuan' => 'required',
            'jumlah' => 'required', 
        ],[
            'nama_obat.required' => 'Nama obat wajib diisi !',
            'jenis_obat.required' => 'Jenis obat wajib diisi !',
            'satuan.required' => 'Satuan wajib diisi !',
            'jumlah.required' => 'Jumlah wajib diisi !',
        ]);
        $dropdown = ['Kapsul','Tablet','Sirup'];

        $data = [
            'id_obat' => Request()->id_obat,
            'nama_obat' => Request()->nama_obat,
            'jenis_obat' => Request()->jenis_obat,
            'satuan' => Request()->satuan,
            'jumlah' => Request()->jumlah,
        ];
        $this->m_obat->addData($data);
        $dropdown = ['Kapsul','Tablet','Sirup'];
        return redirect()->route('obat')->with('pesan', 'Data berhasil ditambahkan !');
    }


    public function edit($id_obat)
    {
        if (!$this->m_obat->detailData($id_obat)) {
            abort(404);
        }

        $data = [
            'obats' => $this->m_obat->detailData($id_obat)
        ];
        $data = ['obats' => $this->m_obat->detailData($id_obat)];
        $dropdown = ['Kapsul','Tablet','Sirup'];
        return view('klinik/v_edit_obat', $data, compact(['dropdown']));
    }

    public function update(Request $request, $id_obat)
    {
        Request()->validate([
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'satuan' => 'required',
            'jumlah' => 'required',
        ], [
            'nama_obat.required' => 'Nama obat wajib diisi !',
            'jenis_obat.required' => 'Jenis obat wajib diisi !',
            'satuan.required' => 'Satuan wajib diisi !',
            'jumlah.required' => 'Jumlah wajib diisi !',
        ]);
            $data = [
            'id_obat' => Request()->id_obat,
            'nama_obat' => Request()->nama_obat,
            'jenis_obat' => Request()->jenis_obat,
            'satuan' => Request()->satuan,
            'jumlah' => Request()->jumlah,
            ];
            $this->m_obat->editData($id_obat,$data);
        
        return redirect()->route('obat')->with('pesan', 'Data berhasil diupdate !');

    }

    public function delete($id_obat)
    {
        //hapus atau delete foto
        // $obat = $this->M_kelola_obat_pegawai->detailData($id_obat);
        // if ($dosen->foto_dosen <> "") {
        //     unlink(public_path('foto_dosen') . '/' . $dosen->foto_dosen);
        // }
        $this->m_obat->deleteData($id_obat);
        return redirect()->route('obat')->with('pesan', 'Data berhasil dihapus !');
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
