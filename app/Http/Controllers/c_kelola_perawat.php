<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\m_perawat;
use App\Http\Controllers\Auth;
use DB;

class c_kelola_perawat extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_perawat = new m_perawat();
    }
    public function index() 
    {
        $data = ['perawat' => $this->m_perawat->allData()
    ];
    return view('klinik/v_kelola_perawat', $data);
    }

    public function detail($id_perawat)
    {
        if(!$this->m_perawat->detailData($id_perawat))
        {abort(404);
        }
        $data = ['perawat' => $this->m_perawat->detailData($id_perawat)
    ];
    return view('klinik/v_detailperawat',$data);
    }

    public function add()
    {
        $id_baru = [ 'id_baru' => $this->m_perawat->id_baru()];
        $dropdown = ['Laki-laki', 'Perempuan'];
        return view('klinik/v_addperawat', $id_baru, compact(['dropdown']));
    }

    public function insert()
    {
        Request()->validate([
            // 'tanggal' => 'required',
            'nama_perawat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'foto_perawat' => 'required|mimes:jpg,png,jpeg,bmp|max:1024',
            'jk' => 'required',
        ],[
            // 'tanggal.required' => 'Tanggal wajib diisi !',
            'nama_perawat.required' => 'Nama perawat wajib diisi !',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi !',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi !',
            'alamat.required' => 'Alamat wajib diisi !',
            'foto_perawat.required' => 'Foto wajib diisi !',
            'jk.required' => 'Jadwal Kerja wajib diisi !',
        ]);
        $file = Request()->foto_perawat;
        $fileName = Request()->id_perawat .'.'. $file->extension();
        $file->move(public_path('foto_perawat'),$fileName);
        // $datetime = date("d-M-Y");
        // $dropdown = ['Disetujui','Belum Disetujui','Tidak Disetujui'];

        $data = [
            'id_perawat' => Request()->id_perawat,
            'nama_perawat' => Request()->nama_perawat,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'alamat' => Request()->alamat,
            'foto_perawat' => $fileName,
            'jk' => Request()->jk,
        ];
        $this->m_perawat->addData($data);
        return redirect()->route('perawat')->with('pesan', 'Data berhasil ditambahkan !');
    }
    
    public function edit($id_perawat)
    {
        if(!$this->m_perawat->detailData($id_perawat))
        {abort(404);
        }

        $data = ['perawat' => $this->m_perawat->detailData($id_perawat)];
        $dropdown = ['Laki-laki','Perempuan'];
        return view('klinik/v_editperawat',$data, compact(['dropdown']));
    }

    public function update($id_perawat)
    {
        Request()->validate([
            'nama_perawat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'foto_perawat' => '|mimes:jpg,png,jpeg,bmp|max:1024',
            'jk' => 'required',
        ], [
            'nama_perawat.required' => 'Nama perawat wajib diisi !',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi !',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi !',
            'alamat.required' => 'Alamat wajib diisi !',
            'jk.required' => 'Jadwal Kerja wajib diisi !',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto_perawat  <> "") {
            //jika ganti gambar/foto
            $file = Request()->foto_perawat;
            $fileName = Request()->id_perawat .'.'. $file->extension();
            $file->move(public_path('foto_perawat'),$fileName);
            $file2 = Request()->status;
            $fileStatus = Request()->id_perawat.'.'. $file2->extension();
            $file2->move(public_path('status'),$fileStatus);
            $dropdown = ['Laki-laki','Perempuan'];
            // $datetime = date("Y-m-d");

            $data = [
            'id_perawat' => Request()->id_perawat,
            'nama_perawat' => Request()->nama_perawat,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'alamat' => Request()->alamat,
            'foto_perawat' => $fileName,
            'jk' => Request()->jk,
            
            ];
            $this->m_perawat->editData($id_perawat,$data);
        }
        else {
            //jika tidak ganti gambar/foto
            $data = [
            'id_perawat' => Request()->id_perawat,
            'nama_perawat' => Request()->nama_perawat,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'alamat' => Request()->alamat,
            'jk' => Request()->jk,
            ];
            $this->m_perawat->editData($id_perawat,$data);
        
        }
        
        return redirect()->route('perawat')->with('pesan', 'Data berhasil diupdate !');

    }

    public function delete($id_perawat)
    {
        //hapus atau delete foto
        $perawat = $this->m_perawat->detailData($id_perawat);
        if ($perawat->foto_perawat <> "") {
        unlink(public_path('foto_perawat'). '/' . $perawat->foto_perawat);
        }
        $this->m_perawat->deleteData($id_perawat);
        return redirect()->route('perawat')->with('pesan','Data berhasil dihapus !');
    }
}
