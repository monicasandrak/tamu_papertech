<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_tamu;


class c_kelola_tamu extends Controller
{
    public function index() 
    {
        $data = ['tamu' => $this->m_tamu->allData()
    ];
    return view('v_kelola_tamu', $data);
    }

    public function detail($id_tamu)
    {
        if(!$this->m_tamu->detailData($id_tamu))
        {abort(404);
        }
        $data = ['tamu' => $this->m_tamu->detailData($id_tamu)
    ];
    return view('v_detailtamu',$data);
    }

    public function add()
    {
        $id_baru = [ 'id_baru' => $this->m_tamu->id_baru()];
        return view('v_addtamu', $id_baru);
    }

    public function insert()
    {
        Request()->validate([
            'tanggal' => 'required',
            'nama_tamu' => 'required',
            'alamat' => 'required',
            'keperluan' => 'required',
            'bertemu_dengan' => 'required',
            'no_ktp' => 'required',
            'foto_ktp' => 'required|mimes:jpg,png,jpeg,bmp|max:1024',
            'no_kendaraan' => 'required',
            'jam_masuk' => 'required',  
        ],[
            'tanggal.required' => 'Tanggal wajib diisi !',
            'nama_tamu.required' => 'Nama tamu wajib diisi !',
            'alamat.required' => 'Alamat wajib diisi !',
            'keperluan.required' => 'Keperluan wajib diisi !',
            'bertemu_dengan' => 'Bertemu dengan wajib diisi !',
            'no_ktp.required' => 'No KTP wajib diisi !',
            'no_ktp.min' => 'No KTP harus 16 karakter !',
            'no_ktp.max' => 'No KTP harus 16 karakter !',
            'foto_ktp.required' => 'Foto KTP wajib diisi !',
            'no_kendaraan.required' => 'No kendaraan wajib diisi !',
            'jam_masuk.required' => 'Jam masuk wajib diisi !', 
        ]);
        $this->m_tamu->addData($data);
        return redirect()->route('tamu')->with('pesan', 'Data berhasil ditambahkan !');
    }
    
    public function edit($id_tamu)
    {
        if(!$this->m_tamu->detailData($id_tamu))
        {abort(404);
        }

        $data = ['tamu' => $this->m_tamu->detailData($id_tamu)
        ];
        return view('v_edittamu',$data);
    }

    public function update($id_tamu)
    {
        Request()->validate([
            'tanggal' => 'required',
            'nama_tamu' => 'required',
            'alamat' => 'required',
            'keperluan' => 'required',
            'bertemu_dengan' => 'required',
            'no_ktp' => 'required',
            'foto_ktp' => 'required|mimes:jpg,png,jpeg,bmp|max:1024',
            'no_kendaraan' => 'required',
            'jam_masuk' => 'required',  
        ], [
            'tanggal.required' => 'Tanggal wajib diisi !',
            'nama_tamu.required' => 'Nama tamu wajib diisi !',
            'alamat.required' => 'Alamat wajib diisi !',
            'keperluan.required' => 'Keperluan wajib diisi !',
            'bertemu_dengan' => 'Bertemu dengan wajib diisi !',
            'no_ktp.required' => 'No KTP wajib diisi !',
            'no_ktp.min' => 'No KTP harus 16 karakter !',
            'no_ktp.max' => 'No KTP harus 16 karakter !',
            'foto_ktp.required' => 'Foto KTP wajib diisi !',
            'no_kendaraan.required' => 'No kendaraan wajib diisi !',
            'jam_masuk.required' => 'Jam masuk wajib diisi !', 
        ]);
        $this->m_tamu->editData($id_tamu);
        return redirect()->route('tamu')->with('pesan', 'Data berhasil diupdate !');

    }

    public function delete($id_tamu)
    {
        
        $this->m_tamu->deleteData($id_tamu);
        return redirect()->route('v_kelola_tamu')->with('pesan','Data berhasil dihapus !');
    }

}

