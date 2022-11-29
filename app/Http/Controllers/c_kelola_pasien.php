<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_pasien;
use App\Models\obat;
use App\Models\dokter;
use App\Models\m_dokter;

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
        $obat = obat::all();
        $dokter = m_dokter::all();
        $dropdown = [
            'Management',
            'Marketing',
            'Accounting',
            'Teknik',
            'Logistik',
            'HRGA (Human Resources and General Affair)',
            'Papcor',
            'HSE (Human Safety Environment)',
            'Quality Control',
            'Produksi',
            'Lainnya'
        ];
        $dropdown1 = [
            'Perempuan','Laki - Laki'
        ];
        return view('klinik.v_add_pasien', $id_baru, compact(['dropdown','obat', 'dropdown1', 'dokter']));
    }
    
    public function insert()
    {
        Request()->validate([
            // 'tanggal' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'departement' => 'required',
            'keluhan' => 'required',
            'diagnosa' => 'required',
            'dokter' => 'required', 
            'obat' => 'required', 
            'jumlah' => 'required', 
        ],[
            // 'tanggal.required' => 'Tanggal wajib diisi !',
            'nama_pasien.required' => 'Nama pasien wajib diisi !',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi !',
            'umur.required' => 'Umur wajib diisi !',
            'departement.required' => 'Departement wajib diisi !',
            'keluhan.required' => 'Keluhan wajib diisi !',
            'diagnosa.required' => 'Diagnosa wajib diisi !',
            'dokter.required' => 'Dokter pemeriksa wajib diisi !',
            'obat.required' => 'Obat wajib diisi !',
            'jumlah.required' => 'Jumlah wajib diisi !',
        ]);
        $datetime = date("d F Y");
        $dokter = m_dokter::all();
        $obat = obat::all();
        $dropdown = [
            'Management',
            'Marketing',
            'Accounting',
            'Teknik',
            'Logistik',
            'HRGA (Human Resources and General Affair)',
            'Papcor',
            'HSE (Human Safety Environment)',
            'Quality Control',
            'Produksi',
            'Lainnya'
        ];
        $dropdown1 = [
            'Perempuan','Laki - Laki'
        ];
        $data = [
            'id_pasien' => Request()->id_pasien,
            'tanggal' => $datetime,
            'nama_pasien' => Request()->nama_pasien,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'umur' => Request()->umur,
            'departement' => Request()->departement,
            'keluhan' => Request()->keluhan,
            'diagnosa' => Request()->diagnosa,
            'pemeriksa' => Request()->pemeriksa,
            'dokter' => Request()->dokter,
            'obat' => Request()->obat,
            'jumlah' => Request()->jumlah,
        ];
        $this->m_pasien->addData($data);
        $obat = obat::all();
        $dokter = m_dokter::all();
        $dropdown = [
            'Management',
            'Marketing',
            'Accounting',
            'Teknik',
            'Logistik',
            'HRGA (Human Resources and General Affair)',
            'Papcor',
            'HSE (Human Safety Environment)',
            'Quality Control',
            'Produksi',
            'Lainnya'
        ];
        $dropdown1 = [
            'Perempuan','Laki - Laki'
        ];
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
        $obat = obat::all();
        $dokter = m_dokter::all();
        $dropdown = [
            'Management',
            'Marketing',
            'Accounting',
            'Teknik',
            'Logistik',
            'HRGA (Human Resources and General Affair)',
            'Papcor',
            'HSE (Human Safety Environment)',
            'Quality Control',
            'Produksi',
            'Lainnya'
        ];
        $dropdown1 = [
            'Perempuan','Laki - Laki'
        ];
        return view('klinik/v_edit_pasien', $data, compact(['dropdown', 'dropdown1', 'obat', 'dokter']));
    }

    public function update(Request $request, $id_pasien)
    {
        Request()->validate([
            // 'tanggal' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'departement' => 'required',
            'keluhan' => 'required',
            'diagnosa' => 'required',
            'dokter' => 'required',
            'obat' => 'required', 
            'jumlah' => 'required', 
            
        ], [
            // 'tanggal.required' => 'Tanggal wajib diisi !',
            'nama_pasien.required' => 'Nama pasien wajib diisi !',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi !',
            'umur.required' => 'Umur wajib diisi !',
            'departement.required' => 'Departement wajib diisi !',
            'keluhan.required' => 'Keluhan wajib diisi !',
            'diagnosa.required' => 'Diagnosa wajib diisi !',
            'dokter.required' => 'Dokter pemeriksa wajib diisi !',
            'obat.required' => 'Obat wajib diisi !',
            'jumlah.required' => 'Jumlah wajib diisi !',
        ]);
        $datetime = date("d F Y");
            $data = [
            'id_pasien' => Request()->id_pasien,
            'tanggal' => $datetime,
            'nama_pasien' => Request()->nama_pasien,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'umur' => Request()->umur,
            'departement' => Request()->departement,
            'keluhan' => Request()->keluhan,
            'diagnosa' => Request()->diagnosa,
            'pemeriksa' => Request()->pemeriksa,
            'obat' => Request()->obat,
            'jumlah' => Request()->jumlah,
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

    // public function print()
    // {
    //     //mengambil data dan tampilan dari halaman laporan_pdf
    //     //data di bawah ini bisa kalian ganti nantinya dengan data dari database
    //     $data = PDF::loadview('v_print', [
    //         'data' => 'Laporan Data Dosen ' . date('d F Y'),
    //         'dosen' => $this->M_Dosen->allData()
    //     ])->setPaper('a4', 'landscape');
    //     //mendownload laporan.pdf
    //     return $data->download('laporan.pdf');
    // }

    
}
