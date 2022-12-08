<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_kendaraan;
use Illuminate\Support\Facades\Auth;
use DB;



class c_kelola_kendaraan extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_kendaraan = new m_kendaraan();
    }

    public function index() 
    {
        $data = ['kendaraan' => $this->m_kendaraan->allData()
    ];
    if (Auth::check()) {
        
        return view('security/v_kelola_kendaraan', $data);
    }
    
    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    public function detail($id_pengendara)
    {
        if(!$this->m_kendaraan->detailData($id_pengendara))
        {abort(404);
        }
        $data = ['kendaraan' => $this->m_kendaraan->detailData($id_pengendara)
    ];
    if (Auth::check()) {
        //check the kendaraan visibillity
        if (Auth::user()->level !== 'security')
        {
            return back();
        }
        return view('security/v_detailkendaraan', $data);
    }
    
    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    public function add()
    {
        $id_baru = [ 'id_baru' => $this->m_kendaraan->id_baru()];
        $dropdown = ['Karyawan','Kontraktor','PKL', 'Lainnya'];
        $dropdown2 = [
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
        $dropdown3 = ['Aktif','Tidak Aktif'];
        $dropdown4 = ['2016', '2017','2018','2019', '2020','2021','2022', '2023', '2024','2025', '2026', '2027', '2028', '2029', '2030'];
        if (Auth::check()) {
            //check the kendaraan add
            if (Auth::user()->level !== 'security')
            {
                return back();
            }
        return view('security/v_addkendaraan', $id_baru, compact(['dropdown','dropdown2', 'dropdown3', 'dropdown4']));
    }
    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }

    public function insert()
    {
        Request()->validate([
            'nama_pengendara' => 'required',
            'posisi' => 'required',
            // 'departement' => 'required',
            'no_kendaraan' => 'required',
            // 'tanggal_pajak' => 'required',  
            // 'status_pajak'=>'required',
            'status_sim'=>'required',
            // 'status_akhir'=>'required',
            // 'swab' => 'required',
        ],[
            'nama_pengendara.required' => 'Nama pengendara wajib diisi !',
            'posisi.required' => 'Posisi wajib diisi !',
            // 'departement.required' => 'Departement wajib diisi !',
            'no_kendaraan.required' => 'Nomor Kendaraan wajib diisi !',
            // 'tanggal_pajak' => 'Tanggal pajak wajib diisi !',
            'status_sim.required' => 'Status SIM wajib diisi !',
            
        ]);
        

        $data = [
            'id_pengendara' => Request()->id_pengendara,
            'nama_pengendara' => Request()->nama_pengendara,
            'posisi' => Request()->posisi,
            'departement' => Request()->departement,
            'no_kendaraan' => Request()->no_kendaraan,
            'pemeriksa_kendaraan' => Request()->pemeriksa_kendaraan,
            'tanggal_pajak' => Request()->tanggal_pajak,
           
            'status_pajak' => Request()->status_pajak,
            

            'status_sim' => Request()->status_sim,
            'status_akhir' => Request()->status_akhir,
        ];
        $this->m_kendaraan->addData($data);

        return redirect()->route('kendaraan')->with('pesan', 'Data berhasil ditambahkan !');
    }
    
    public function edit($id_pengendara)
    {
        if(!$this->m_kendaraan->detailData($id_pengendara))
        {abort(404);
        }

        $data = ['kendaraan' => $this->m_kendaraan->detailData($id_pengendara)];
        $dropdown = ['Karyawan','Kontraktor','PKL', 'Lainnya'];
        $dropdown2 = [
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
        $dropdown3 = ['Aktif','Tidak Aktif'];
        $dropdown4 = ['2016', '2017','2018','2019', '2020','2021','2022', '2023', '2024','2025', '2026', '2027', '2028', '2029', '2030'];
        if (Auth::check()) {
            //check the kendaraan add
            if (Auth::user()->level !== 'security')
            {
                return back();
            }
        return view('security/v_editkendaraan',$data, compact(['dropdown','dropdown2', 'dropdown3', 'dropdown4']));
    }
     else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }


    public function update($id_pengendara)
    {
        Request()->validate([
            'nama_pengendara' => 'required',
            'posisi' => 'required',
            // 'departement' => 'required',
            'no_kendaraan' => 'required',
            'tanggal_pajak' => 'required',  
            // 'status_pajak'=>'required',
            'status_sim'=>'required',
            // 'status_akhir'=>'required',
            // 'swab' => 'required',
        ],[
            'nama_pengendara.required' => 'Nama pengendara wajib diisi !',
            'posisi.required' => 'Posisi wajib diisi !',
            // 'departement.required' => 'Departement wajib diisi !',
            'no_kendaraan.required' => 'Nomor Kendaraan wajib diisi !',
            'tanggal_pajak' => 'Tanggal pajak wajib diisi !',
            'status_sim.required' => 'Status SIM wajib diisi !',
            
        ]);

            $data = [
                'id_pengendara' => Request()->id_pengendara,
                'nama_pengendara' => Request()->nama_pengendara,
                'posisi' => Request()->posisi,
                'departement' => Request()->departement,
                'no_kendaraan' => Request()->no_kendaraan,
                'tanggal_pajak' => Request()->tanggal_pajak,
                'status_pajak' => Request()->status_pajak,
                'status_sim' => Request()->status_sim,
                'status_akhir' => Request()->status_akhir,
            ];
            $this->m_kendaraan->editData($id_pengendara,$data);
        
        
        return redirect()->route('kendaraan')->with('pesan', 'Data berhasil diupdate !');

    }

    public function delete($id_pengendara)
    {
        //hapus atau delete foto
    
        $this->m_kendaraan->deleteData($id_pengendara);
        return redirect()->route('kendaraan')->with('pesan','Data berhasil dihapus !');
       
    }

}

