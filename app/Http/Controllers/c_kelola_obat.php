<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_obat;
use App\Models\obat;

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
        $dropdown = ['Kapsul','Tablet','Sirup', 'Injeksi', 'Drops (Serbuk Kering)'];
        return view('klinik.v_add_obat', $id_baru, compact(['dropdown']));
    }

    public function insert()
    {
        Request()->validate([
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'satuan' => 'required',
            'stok' => 'required', 
        ],[
            'nama_obat.required' => 'Nama obat wajib diisi !',
            'jenis_obat.required' => 'Jenis obat wajib diisi !',
            'satuan.required' => 'Satuan wajib diisi !',
            'stok.required' => 'stok wajib diisi !',
        ]);
       
        $dropdown = ['Kapsul','Tablet','Sirup', 'Injeksi', 'Drops (Serbuk Kering)'];

        $data = [
            'id_obat' => Request()->id_obat,
            'nama_obat' => Request()->nama_obat,
            'jenis_obat' => Request()->jenis_obat,
            'satuan' => Request()->satuan,
            'stok' => Request()->stok,
        ];
        $this->m_obat->addData($data);
        $dropdown = ['Kapsul','Tablet','Sirup', 'Injeksi', 'Drops (Serbuk Kering)'];
        return redirect()->route('obat')->with('pesan', 'Data berhasil ditambahkan !');
    }


    public function edit($id_obat)
    {
        if (!$this->m_obat->detailData($id_obat)) {
            abort(404);
        }

        $data = [
            'obat' => $this->m_obat->detailData($id_obat)
        ];
        $data = ['obat' => $this->m_obat->detailData($id_obat)];
        $dropdown = ['Kapsul','Tablet','Sirup', 'Injeksi', 'Drops (Serbuk Kering)'];
        return view('klinik/v_edit_obat', $data, compact(['dropdown']));
    }

    public function update(Request $request, $id_obat)
    {
        Request()->validate([
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'satuan' => 'required',
            'stok' => 'required',
        ], [
            'nama_obat.required' => 'Nama obat wajib diisi !',
            'jenis_obat.required' => 'Jenis obat wajib diisi !',
            'satuan.required' => 'Satuan wajib diisi !',
            'stok.required' => 'stok wajib diisi !',
        ]);
            $data = [
            'id_obat' => Request()->id_obat,
            'nama_obat' => Request()->nama_obat,
            'jenis_obat' => Request()->jenis_obat,
            'satuan' => Request()->satuan,
            'stok' => Request()->stok,
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
    public function addstok()
    {
        $id_baruobatmasuk = ['id_baruobatmasuk' => $this->m_obat->id_baruobatmasuk()];
        $obat = obat::all();
        return view('klinik.v_add_stok', $id_baruobatmasuk, compact(['obat']));
    }

}