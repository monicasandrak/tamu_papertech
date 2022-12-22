<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\m_security;
use DB;
use Illuminate\Support\Facades\Auth;

class c_kelola_security extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_security = new m_security();
    }

    public function index() 
    {
        $data = ['security' => $this->m_security->allData()
    ];
    if (Auth::check()) {

        return view('security/v_kelola_security', $data);
    }

    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    public function detail($id_security)
    {
        if(!$this->m_security->detailData($id_security))
        {abort(404);
        }
        $data = ['security' => $this->m_security->detailData($id_security)
    ];

    if (Auth::check()) {
        //check the tamu visibillity
        if (Auth::user()->level !== 'security')
        {
            return back();
        }
    return view('security/v_detailsecurity',$data);
    }

    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    public function add()
    {
        $id_baru = [ 'id_baru' => $this->m_security->id_baru()];
        $dropdown = ['Laki-laki', 'Perempuan'];
        $dropdown2 = ['Produksi', 'Gudang', 'Pengecekan', 'Logistik'];
        
        if (Auth::check()) {
            //check the tamu add
            if (Auth::user()->level !== 'security')
            {
                return back();
            }
        return view('security/v_addsecurity2', $id_baru, compact(['dropdown', 'dropdown2']));
    }
    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    public function insert()
    {
        Request()->validate([
            // 'tanggal' => 'required',
            'nama_security' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'bagian' => 'required',
            'foto_security' => 'required|mimes:jpg,png,jpeg,bmp|max:1024',
        ],[
            // 'tanggal.required' => 'Tanggal wajib diisi !',
            'nama_security.required' => 'Nama security wajib diisi !',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi !',
            'alamat.required' => 'Alamat wajib diisi !',
            'jk.required' => 'Jenis Kelamin wajib diisi !',
            'bagian' => 'Bagian wajib diisi !',
            'foto_security.required' => 'Foto wajib diisi !',
            'foto_security.mimes' => 'Foto Security harus diisi dengan format jpg,png,jpeg dan bmp !',
            'foto_security.max' => 'Foto Security maksimal diisi dengan ukuran file 1024 kb !',
        ]);
        $file = Request()->foto_security;
        $fileName = Request()->id_security .'.'. $file->extension();
        $file->move(public_path('foto_security'),$fileName);
        // $datetime = date("d-M-Y");
        // $dropdown = ['Disetujui','Belum Disetujui','Tidak Disetujui'];

        $data = [
            'id_security' => Request()->id_security,
            'nama_security' => Request()->nama_security,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'alamat' => Request()->alamat,
            'jk' => Request()->jk,
            'bagian' => Request()->bagian,
            'foto_security' => $fileName,
        ];
        $this->m_security->addData($data);
        return redirect()->route('security')->with('pesan', 'Data berhasil ditambahkan !');
    }
    
    public function edit($id_security)
    {
        if(!$this->m_security->detailData($id_security))
        {abort(404);
        }

        $data = ['security' => $this->m_security->detailData($id_security)];
        $dropdown = ['Laki-laki','Perempuan'];
        $dropdown2 = ['Produksi', 'Gudang', 'Pengecekan', 'Logistik'];
        
        if (Auth::check()) {
            //check the tamu add
            if (Auth::user()->level !== 'security')
            {
                return back();
            }
        return view('security/v_editsecurity2',$data, compact(['dropdown', 'dropdown2']));
    }

    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    public function update($id_security)
    {
        Request()->validate([
            'nama_security' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'bagian' => 'required',
            'foto_security' => '|mimes:jpg,png,jpeg,bmp|max:1024',
        ], [
            'nama_security.required' => 'Nama security wajib diisi !',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi !',
            'alamat.required' => 'Alamat wajib diisi !',
            'jk.required' => 'Jenis Kelamin wajib diisi !',
            'bagian.required' => 'Bagian wajib diisi !',
            'foto_security.mimes' => 'Foto Security harus diisi dengan format jpg,png,jpeg dan bmp !',
            'foto_security.max' => 'Foto Security maksimal diisi dengan ukuran file 1024 kb !',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto_security  <> "") {
            //jika ganti gambar/foto
            $file = Request()->foto_security;
            $fileName = Request()->id_security .'.'. $file->extension();
            $file->move(public_path('foto_security'),$fileName);
           
            $dropdown = ['Laki-laki','Perempuan'];
            $dropdown2 = ['Produksi', 'Gudang', 'Pengecekan', 'Logistik'];
            
    
            // $datetime = date("Y-m-d");

            $data = [
            'id_security' => Request()->id_security,
            'nama_security' => Request()->nama_security,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'alamat' => Request()->alamat,
            'jk' => Request()->jk,
            'bagian' => Request()->bagian,
            'foto_security' => $fileName,
            
            ];
            $this->m_security->editData($id_security,$data);
        }
        else {
            //jika tidak ganti gambar/foto
            $data = [
            'id_security' => Request()->id_security,
            'nama_security' => Request()->nama_security,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'alamat' => Request()->alamat,
            'jk' => Request()->jk,
            'bagian' => Request()->bagian,

            ];
            $this->m_security->editData($id_security,$data);
        
        }
        
        return redirect()->route('security')->with('pesan', 'Data berhasil diupdate !');

    }

    public function delete($id_security)
    {
        //hapus atau delete foto
        $security = $this->m_security->detailData($id_security);
        if ($security->foto_security <> "") {
        unlink(public_path('foto_security'). '/' . $security->foto_security);
        }
        $this->m_security->deleteData($id_security);
        return redirect()->route('security')->with('pesan','Data berhasil dihapus !');
    }
}
