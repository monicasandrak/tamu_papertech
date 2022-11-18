<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_obatmasuk;
use App\Models\obat;

class c_kelola_obatmasuk extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_obatmasuk = new m_obatmasuk();
    }


    public function add()
    {
        $id_baru = ['id_baru' => $this->m_obatmasuk->id_baru()];
        $obat = obat::all();
        return view('klinik.v_add_stok', $id_baru, compact(['obat']));
    }

    public function insert()
    {
        Request()->validate([
            'nama_obat' => 'required',
            'stok' => 'required', 
        ],[
            'nama_obat.required' => 'Nama obat wajib diisi !',
            'stok.required' => 'stok wajib diisi !',
        ]);
        $datetime = date("d-m-Y");
        $obat = obat::all();
        $data = [
            'id_obatmasuk' => Request()->id_obatmasuk,
            'nama_obat' => Request()->nama_obat,
            'tanggal' => $datetime,
            'stok' => Request()->stok,
        ];
        $obat = obat::all();
        $this->m_obatmasuk->addData($data);
        return redirect()->route('obat')->with('pesan', 'Data berhasil ditambahkan !');
    }
    
}