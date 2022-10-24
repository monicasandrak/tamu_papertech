<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\m_tamu;
use App\Http\Controllers\Auth;

class c_user extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_tamu = new m_tamu();
    }
    public function index() 
    {
        $data = ['tamu' => $this->m_tamu->allData()
    ];
    return view('page_tamu', $data);
    }

    public function add()
    {
        $id_baru = [ 'id_baru' => $this->m_tamu->id_baru()];
        return view('page_tamu', $id_baru);
    }

    public function insert()
    {
        Request()->validate([
            'tanggal' => 'required',
            'nama_tamu' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'keperluan' => 'required',
            'bertemu_dengan' => 'required',
            'no_ktp' => 'required|min:10|max:16',
            'foto_ktp' => 'required|mimes:jpg,png,jpeg,bmp|max:1024',
            'no_kendaraan' => 'required',
            'jam_masuk' => 'required',  
        ],[
            'tanggal.required' => 'Tanggal wajib diisi !',
            'nama_tamu.required' => 'Nama tamu wajib diisi !',
            'alamat.required' => 'Alamat wajib diisi !',
            'pekerjaan.required' => 'Pekerjaan wajib diisi !',
            'keperluan.required' => 'Keperluan wajib diisi !',
            'bertemu_dengan' => 'Bertemu dengan wajib diisi !',
            'no_ktp.required' => 'Nomor KTP atau Nomor Identitas wajib diisi !',
            'no_ktp.min' => 'Nomor KTP atau Nomor Identias minimal 16 karakter !',
            'no_ktp.max' => 'Nomor KTP atau Nomor Identitas maksimal 16 karakter !',
            'foto_ktp.required' => 'Foto KTP wajib diisi !',
            'no_kendaraan.required' => 'No kendaraan wajib diisi !',
            'jam_masuk.required' => 'Jam masuk wajib diisi !', 
        ]);
        $file = Request()->foto_ktp;
        $fileName = Request()->nama .'.'. $file->extension();
        $file->move(public_path('foto_ktp'),$fileName);

        $data = [
            'id_tamu' => Request()->id_tamu,
            'tanggal' => Request()->tanggal,
            'nama_tamu' => Request()->nama_tamu,
            'alamat' => Request()->alamat,
            'pekerjaan' => Request()->pekerjaan,
            'keperluan' => Request()->keperluan,
            'bertemu_dengan' => Request()->bertemu_dengan,
            'no_ktp' => Request()->no_ktp,
            'foto_ktp' => $fileName,
            'no_kendaraan' => Request()->no_kendaraan,
            'jam_masuk' => Request()->jam_masuk,
            'hasil_swab' => Request()->hasil_swab,
        ];
        $this->m_tamu->addData($data);
        return redirect()->route('form_tamu')->with('pesan', 'Anda berhasil mengisi form tamu !');
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('/login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success','You are now logged in');
        }
        return back()->withErrors([
            'password' => 'Username atau Password salah',
        ]);
    }
}
