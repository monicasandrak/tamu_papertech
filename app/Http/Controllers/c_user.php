<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\m_tamu;
use App\Models\m_obat;
use App\Models\m_security;
use App\Models\m_perawat;
use App\Models\m_dokter;
use App\Models\User;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
use Validator;
use Illuminate\Validation\Rule;
use DB;

// use App\User;

class c_user extends Controller
{
    protected $users = 'users';
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_user = new m_user();
    }
    public function index() 
    {
        $data = ['user' => $this->m_user->allData()
    ];
    if (Auth::check()) 
    {
        return view('user/v_kelola_user', $data);
    }

    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    public function detail($id)
    {
        if(!$this->m_user->detailData($id))
        {abort(404);
        }
        $data = ['user' => $this->m_user->detailData($id)
    ];
    if (Auth::check()) {
        //check the tamu visibillity
        if (Auth::user()->level !== 'admin')
        {
            return back();
        }
        return view('user/v_detail_user',$data);
    }
    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    public function add()
    {
        $id_baru = [ 'id_baru' => $this->m_user->id_baru()];
        $dropdown3 = ['security','klinik','admin'];

        if (Auth::check()) {
            //check the tamu visibillity
            if (Auth::user()->level !== 'admin')
            {
                return back();
            }
        return view('user/v_add_user', $id_baru, compact(['dropdown3']));
    }
    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    public function insert()
    {
        Request()->validate([
            'username' => 'required||string|min:5|max:100|unique:users,username',
            'level' => 'required',
            'password' => 'required|min:8', 
        ],[
            'username.required' => 'Username wajib diisi !',
            'username.unique' => 'Username sudah ada !',
            'username.string' => 'Username wajib diisi !',
            'username.min' => 'Username minimal 3 karakter !',
            'username.max' => 'Username maksimal 100 karakter !',
            'level.required' => 'Level wajib diisi !',
            'password.min' => 'Password minimal 8 karakter !',
            'password.required' => 'Password wajib diisi !',
        ]);

        $dropdown3 = ['security','klinik','admin'];

        $data = [
            'id' => Request()->id,
            'username' => Request()->username,
            'level' => Request()->level,
            'password' => bcrypt(Request()->password),
        ];
        $this->m_user->addData($data);
        $dropdown3 = ['security','klinik','admin'];
        return redirect()->route('user')->with('pesan', 'Data berhasil ditambahkan !');
    }
    
    public function edit($id)
    {
        if(!$this->m_user->detailData($id))
        {abort(404);
        }

        $data = ['user' => $this->m_user->detailData($id)];
        $dropdown3 = ['security','klinik','admin'];

        if (Auth::check()) {
            //check the tamu visibillity
            if (Auth::user()->level !== 'admin')
            {
                return back();
            }
        return view('user/v_edit_user',$data, compact(['dropdown3']));
    }
    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    public function update(Request $request, $id)
    {
        Request()->validate([
            'username' => 'required||string|min:5|max:100|unique:users,username',
            // 'level' => 'required',
            'password' => 'required|min:8',
        ], [
            'username.required' => 'Username wajib diisi !',
            'username.unique' => 'Username sudah ada !',
            'username.string' => 'Username wajib diisi !',
            'username.min' => 'Username minimal 3 karakter !',
            'username.max' => 'Username maksimal 100 karakter !',
            'level.required' => 'level wajib diisi !',
            'password.min' => 'Password minimal 8 karakter !',
            'password.required' => 'Password wajib diisi !',
        ]);

            $data = [
            'id' => Request()->id,
            'username' => Request()->username,
            // 'level' => Request()->level,
            'password' => bcrypt(Request()->password),
            ];
            $this->m_user->editData($id,$data);

        return redirect()->route('user')->with('pesan', 'Data berhasil diupdate !');

    }

    public function delete($id)
    {
        //hapus atau delete foto
        // $user = $this->m_user->detailData($id);
        // if ($user->foto_ktp <> "") {
        // unlink(public_path('foto_ktp'). '/' . $user->foto_ktp);
        // }
        $this->m_user->deleteData($id);
        return redirect()->route('user')->with('pesan','Data berhasil dihapus !');
    }

    public function password()
    {
        $this->m_user = new m_user();

        // $data['contoh'] = $this->m_uang_kas->getSum(); //Get function from m_uang_kas
        // $data['substract'] = $this->m_uang_kas->sumPengeluaran();
        $data['title'] = 'Ubah Password';
        if (Auth::check()) {
            return view('user/v_password', $data);
        }
        else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }   

    public function password_action(Request $request)
    {
        $request->validate([
            // 'username' => 'string|min:3|max:100',
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            
        ],[
            'old_password.required' => 'Password Lama wajib diisi !',
            'old_password.current_password' => 'Password lama salah !',
            'new_password.required' => 'Password dan Konfirmasi Password wajib diisi !',
            'new_password.confirmed' => 'Password atau Konfirmasi Password salah !',
            'new_password.min' => 'Password atau Konfirmasi Password minimal 8 karakter !',
            'new_password.regex' => "Konfirmasi Password gabungan dari huruf A-z, angka 0-9 dan setidaknya memiliki salah satu karakter # ? ! @ $ % ^ & * - _ + = : ; } {  ] [ \ /> < , . | ` ~",
        ]);
        
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password berhasil diubah!');
    }

    public function account() 
    {
        $this->m_user = new m_user();

        $data['title'] = 'Account';
        $user = Auth::user();
        $data['title'] = 'Account';
        if (Auth::check()) {
            //check the user has login
        return view('user/v_account',$data,compact(['user']));
        }
        else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    public function account_action(Request $request)
    {

        $atribut = $request->validate([
            'username' => 'required||string|min:5|max:100|unique:users,username',
            
        ],[
            'username.unique' => 'Username sudah ada !',
            'username.string' => 'Username wajib diisi !',
            'username.min' => 'Username minimal 3 karakter !',
            'username.max' => 'Username maksimal 100 karakter !',
        
        ]);

        auth()->user()->update($atribut);
        return back()->with('success', 'Account berhasil diubah');

    }
    public function dashboard()
    {
        $user = user::count();
        $tamu = m_tamu::count();
        $security = m_security::count();
        $pasien_tamu = m_tamu::count();
        // $pasien = m_pasien::count();
        // $obat = m_obat::count();
        // $perawat = m_perawat::count();
        // $dokter = m_dokter::count();
         return view('security/v_dashboard2', compact('user', 'tamu' , 'security', 'pasien_tamu')); 
    }

    public function laporan() 
    {
        $data = ['user' => $this->m_user->allData()
    ];

    if (Auth::check()) {
        //check the tamu visibillity
        if (Auth::user()->level !== 'admin')
        {
            return back();
        }
    return view('user/v_laporan_user', $data);
    }
    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }
}
