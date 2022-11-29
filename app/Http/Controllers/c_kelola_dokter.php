<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_dokter;
use App\Models\dokter;


class c_kelola_dokter extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_dokter = new m_dokter();
    }
    public function index() 
    {
        $data = ['dokter' => $this->m_dokter->allData()
    ];
    return view('klinik/v_kelola_dokter', $data);
    }

    public function detail($id_dokter)
    {
        if(!$this->m_dokter->detailData($id_dokter))
        {abort(404);
        }
        $data = ['dokter' => $this->m_dokter->detailData($id_dokter)
    ];
    return view('klinik/v_detaildokter',$data);
    }

    public function add()
    {
        $id_baru = [ 'id_baru' => $this->m_dokter->id_baru()];
        $dropdown = ['Laki-laki', 'Perempuan'];
        return view('klinik/v_adddokter', $id_baru, compact(['dropdown']));
    }

    public function insert()
    {
        Request()->validate([
            // 'tanggal' => 'required',
            'nama_dokter' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'foto_dokter' => 'required|mimes:jpg,png,jpeg,bmp|max:1024',
            'keahlian' => 'required',
            'jk' => 'required',
        ],[
            // 'tanggal.required' => 'Tanggal wajib diisi !',
            'nama_dokter.required' => 'Nama dokter wajib diisi !',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi !',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi !',
            'alamat.required' => 'Alamat wajib diisi !',
            'foto_dokter.required' => 'Foto wajib diisi !',
            'keahlian.required' => 'Keahlian wajib diisi !',
            'jk.required' => 'Jadwal Kerja wajib diisi !',
        ]);
        $file = Request()->foto_dokter;
        $fileName = Request()->id_dokter .'.'. $file->extension();
        $file->move(public_path('foto_dokter'),$fileName);
        // $datetime = date("d-M-Y");
        // $dropdown = ['Disetujui','Belum Disetujui','Tidak Disetujui'];

        $data = [
            'id_dokter' => Request()->id_dokter,
            'nama_dokter' => Request()->nama_dokter,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'alamat' => Request()->alamat,
            'foto_dokter' => $fileName,
            'keahlian' => Request()->keahlian,
            'jk' => Request()->jk,
        ];
        $this->m_dokter->addData($data);
        return redirect()->route('dokter')->with('pesan', 'Data berhasil ditambahkan !');
    }
    
    public function edit($id_dokter)
    {
        if(!$this->m_dokter->detailData($id_dokter))
        {abort(404);
        }

        $data = ['dokter' => $this->m_dokter->detailData($id_dokter)];
        $dropdown = ['Laki-laki','Perempuan'];
        return view('klinik/v_editdokter',$data, compact(['dropdown']));
    }

    public function update($id_dokter)
    {
        Request()->validate([
            'nama_dokter' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'foto_dokter' => '|mimes:jpg,png,jpeg,bmp|max:1024',
            'keahlian' => 'required',
            'jk' => 'required',
        ], [
            'nama_dokter.required' => 'Nama dokter wajib diisi !',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi !',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi !',
            'alamat.required' => 'Alamat wajib diisi !',
            'keahlian.required' => 'Keahlian wajib diisi !',
            'jk.required' => 'Jadwal Kerja wajib diisi !',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto_dokter  <> "") {
            //jika ganti gambar/foto
            $file = Request()->foto_dokter;
            $fileName = Request()->id_dokter .'.'. $file->extension();
            $file->move(public_path('foto_dokter'),$fileName);
            $file2 = Request()->status;
            $fileStatus = Request()->id_dokter.'.'. $file2->extension();
            $file2->move(public_path('status'),$fileStatus);
            $dropdown = ['Laki-laki','Perempuan'];
            // $datetime = date("Y-m-d");

            $data = [
            'id_dokter' => Request()->id_dokter,
            'nama_dokter' => Request()->nama_dokter,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'alamat' => Request()->alamat,
            'foto_dokter' => $fileName,
            'keahlian' => Request()->keahlian,
            'jk' => Request()->keahlian,
            
            ];
            $this->m_dokter->editData($id_dokter,$data);
        }
        else {
            //jika tidak ganti gambar/foto
            $data = [
            'id_dokter' => Request()->id_dokter,
            'nama_dokter' => Request()->nama_dokter,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'alamat' => Request()->alamat,
            'keahlian' => Request()->keahlian,
            'jk' => Request()->jk,
            ];
            $this->m_dokter->editData($id_dokter,$data);
        
        }
        
        return redirect()->route('dokter')->with('pesan', 'Data berhasil diupdate !');

    }

    public function delete($id_dokter)
    {
        //hapus atau delete foto
        $dokter = $this->m_dokter->detailData($id_dokter);
        if ($dokter->foto_dokter <> "") {
        unlink(public_path('foto_dokter'). '/' . $dokter->foto_dokter);
        }
        $this->m_dokter->deleteData($id_dokter);
        return redirect()->route('dokter')->with('pesan','Data berhasil dihapus !');
    }
}
