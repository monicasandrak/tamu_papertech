<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_pasien extends Model
{
    public function allData()
    {
        return DB::table('pasien')->get();
    }

    public function detailData($id_pasien)
    {
     return DB::table('pasien')->where('id_pasien', $id_pasien)->first();
    }
 
    public function addData($data)
    {
     DB::table('pasien')->insert($data);
    }
 
    public function editData($id_pasien, $data)
    {
     DB::table('pasien')->where('id_pasien', $id_pasien)->update($data);
    }
 
    public function deleteData($id_pasien)
    {
     DB::table('pasien')->where('id_pasien', $id_pasien)->delete();
    }
 
    public static function id_baru()
    {
    	$id_pasienmax = DB::table('pasien')->max('id_pasien');
    	$addNol = '';
    	$id_pasienmax = str_replace("PAS", "", $id_pasienmax);
    	$id_pasienmax = (int) $id_pasienmax + 1;
        $incrementKode = $id_pasienmax;

    	if (strlen($id_pasienmax) == 1) {
    		$addNol = "000";
    	} elseif (strlen($id_pasienmax) == 2) {
    		$addNol = "00";
    	} elseif (strlen($id_pasienmax == 3)) {
    		$addNol = "0";
    	}

    	$id_pasienbaru = "PAS".$addNol.$incrementKode;
    	return $id_pasienbaru;
    }  
    // use HasFactory;
    // protected $table = 'pasien';
    // protected $primaryKey = 'id_pasien';

    // protected $fillable = [
    //     'tanggal',
    //     'nama_pasien',
    //     'alamat',
    //     'keperluan',
    //     'bertemu_dengan',
    //     'no_ktp',
    //     'foto_ktp',
    //     'no_kendaraan',
    //     'jam_masuk',
    //     'hasil_swab',
    
    // ];
}
