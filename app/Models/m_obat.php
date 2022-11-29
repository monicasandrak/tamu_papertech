<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_obat extends Model
{
    use HasFactory;

   
    protected $table = 'obats';
    protected $primaryKey = 'id_obat';

    protected $fillable = [
       'ID Obat',
        'Nama Obat',
        'Jenis Obat',
        'bentuk Sediaan',
        'stok',

    ];
    public function allData()
    {
        return DB::table('obats')->get();
    }

    public function detailData($id_obat)
    {
     return DB::table('obat')->where('id_obat', $id_obat)->first();
    }
    
    public function addData($data)
    {
     DB::table('obats')->insert($data);
    }
 
    public function editData($id_obat, $data)
    {
     DB::table('obats')->where('id_obat', $id_obat)->update($data);
    }
 
    public function deleteData($id_obat)
    {
     DB::table('obats')->where('id_obat', $id_obat)->delete();
    }
 
    public static function id_baru()
    {
    	$id_obatmax = DB::table('obats')->max('id_obat');
    	$addNol = '';
    	$id_obatmax = str_replace("OBAT", "", $id_obatmax);
    	$id_obatmax = (int) $id_obatmax + 1;
        $incrementKode = $id_obatmax;

    	if (strlen($id_obatmax) == 1) {
    		$addNol = "000";
    	} elseif (strlen($id_obatmax) == 2) {
    		$addNol = "00";
    	} elseif (strlen($id_obatmax == 3)) {
    		$addNol = "0";
    	}

    	$id_obatbaru = "OBAT".$addNol.$incrementKode;
    	return $id_obatbaru;
    } 
    // use HasFactory;
    // protected $table = 'obat';
    // protected $primaryKey = 'id_obat';

    // protected $fillable = [
    //     'tanggal',
    //     'nama_obat',
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
