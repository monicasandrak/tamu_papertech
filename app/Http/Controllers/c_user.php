<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_user;
use App\Http\Controllers\Auth;

class c_user extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_user = new m_user();
    }
    public function index() 
    {
        $data = ['user' => $this->m_user->allData()
    ];
    return view('user/v_kelola_user', $data);
    }

    public function detail($id)
    {
        if(!$this->m_user->detailData($id))
        {abort(404);
        }
        $data = ['user' => $this->m_user->detailData($id)
    ];
    return view('user/v_detail_user',$data);
    }

    public function add()
    {
        $id_baru = [ 'id_baru' => $this->m_user->id_baru()];
        $dropdown3 = ['security','klinik','admin'];
        return view('user/v_add_user', $id_baru, compact(['dropdown3']));
    }

    public function insert()
    {
        Request()->validate([
            'username' => 'required',
            'level' => 'required',
            'password' => 'required', 
        ],[
            'username.required' => 'Username wajib diisi !',
            'level.required' => 'level wajib diisi !',
            'password.required' => 'password wajib diisi !',
        ]);

        $dropdown3 = ['security','klinik','admin'];

        $data = [
            'id' => Request()->id,
            'username' => Request()->username,
            'level' => Request()->level,
            'password' => Request()->password,
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
        return view('user/v_edit_user',$data, compact(['dropdown3']));
    }

    public function update(Request $request, $id)
    {
        Request()->validate([
            'username' => 'required',
            // 'level' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username wajib diisi !',
            'level.required' => 'level wajib diisi !',
            'password.required' => 'password wajib diisi !',
        ]);

            $data = [
            'id' => Request()->id,
            'username' => Request()->username,
            // 'level' => Request()->level,
            'password' => Request()->password,
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

    // public function status($id)
    // {
    //     //hapus atau delete foto

    //     $user = $this->m_user->detailData($id);
    //     if ($user->foto_ktp <> "") {
    //         unlink(public_path('foto_ktp'). '/' . $user->foto_ktp);
    //     }
    //     $this->m_user->deleteData($id);
    //     return redirect()->route('user')->with('pesan','Data berhasil disetujui !');
    // }
}
