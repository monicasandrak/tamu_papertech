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

    public function detail($id_dosen)
    {
        if (!$this->m_pasien->detailData($id_pasien)) {
            abort(404);
        }
        $data = [
            'pasien' => $this->m_pasien->detailData($id_pasien)
        ];
        return view('v_detailpasienpegawai', $data);
    }

    public function add()
    {
        $id_baru = ['id_baru' => $this->m_pasien->id_baru()];
        //$id_baru2 = implode(" ",$id_baru);
        //echo $id_baru2;
        return view('v_addpasien', $id_baru);
    }

    public function insert()
    {
        Request()->validate([
            'id_pasien' => 'required|unique:pasien,id_pasien|max:11',
            'tanggal' => 'required',
            'nama_pasien' => 'required',
            'departement' => 'required',
            'keluhan' => 'required',
            'diagnosa' => 'required',
            'obat' => 'required',
        ], [ //ini adalah konversi keterangan validasi form NIP dalam bahasa indonesia
            'id_pasien.required' => 'ID wajib di isi !',
            'id_pasien.unique' => 'ID ini sudah terdaftar di database !',
            'id_pasien.max' => 'ID maksimal 11 karakter',
            'nama_pasien.required' => 'Nama Pasien wajib di isi !',
            'departement.required' => 'Nama Departement wajib di isi !',
            'keluhan.required' => 'Keluhan wajib di isi !',
            'diagnosa.required' => 'Diagnosa wajib di isi !',
            'Obat.required' => 'Obat wajib di isi !',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        // $file = Request()->foto_dosen;
        // $fileName = Request()->nip . '.' . $file->extension();
        // $file->move(public_path('foto_dosen'), $fileName);

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
        return view('v_editpasien', $data);
    }

    public function update($id_pasien)
    {
        Request()->validate([
            'id_pasien' => 'required|unique:pasien,id_pasien|max:11',
            'tanggal' => 'required',
            'nama_pasien' => 'required',
            'departement' => 'required',
            'keluhan' => 'required',
            'diagnosa' => 'required',
            'obat' => 'required',
        ], [ //ini adalah konversi keterangan validasi form NIP dalam bahasa indonesia
            'id_pasien.required' => 'ID wajib di isi !',
            'id_pasien.unique' => 'ID ini sudah terdaftar di database !',
            'id_pasien.max' => 'ID maksimal 11 karakter',
            'nama_pasien.required' => 'Nama Pasien wajib di isi !',
            'departement.required' => 'Nama Departement wajib di isi !',
            'keluhan.required' => 'Keluhan wajib di isi !',
            'diagnosa.required' => 'Diagnosa wajib di isi !',
            'Obat.required' => 'Obat wajib di isi !',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        // if (Request()->foto_dosen <> "") {
        //     //jika ganti gambar/foto
        //     $file = Request()->foto_dosen;
        //     $fileName = Request()->nip . '.' . $file->extension();
        //     $file->move(public_path('foto_dosen'), $fileName);

        //     $data = [
        //         'nip' => Request()->nip,
        //         'nama_dosen' => Request()->nama_dosen,
        //         'mata_kuliah' => Request()->mata_kuliah,
        //         'foto_dosen' => $fileName,
        //     ];
        //     $this->M_Dosen->editData($id_dosen, $data);
        // } else {
        //     //jika tidak ganti gambar/foto
        //     $data = [
        //         'nip' => Request()->nip,
        //         'nama_dosen' => Request()->nama_dosen,
        //         'mata_kuliah' => Request()->mata_kuliah,
        //     ];
        //     $this->M_Dosen->editData($id_dosen, $data);
        // }

        return redirect()->route('pasien')->with('pesan', 'Data berhasil diupdate !');
    }

    public function delete($id_pasien)
    {
        //hapus atau delete foto
        // $pasien = $this->M_kelola_pasien_pegawai->detailData($id_pasien);
        // if ($dosen->foto_dosen <> "") {
        //     unlink(public_path('foto_dosen') . '/' . $dosen->foto_dosen);
        // }
        $this->m_pegawai->deleteData($id_pasien);
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
