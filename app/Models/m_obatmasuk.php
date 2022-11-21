<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_obatmasuk extends Model
{
    use HasFactory;

    protected $table = 'obatmasuk';
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
        return DB::table('obatmasuk')->get();
    }

    public function detailData($id_obatmasuk)
    {
     return DB::table('obatmasuk')->where('id_obatmasuk', $id_obatmasuk)->first();
    }
    
    public function addData($data)
    {
     DB::table('obatmasuk')->insert($data);
    }
 
    public function editData($id_obatmasuk, $data)
    {
     DB::table('obatmasuk')->where('id_obatmasuk', $id_obatmasuk)->update($data);
    }
 
    public function deleteData($id_obatmasuk)
    {
     DB::table('obatmasuk')->where('id_obatmasuk', $id_obatmasuk)->delete();
    }
 
    public static function id_baru()
    {
    	$id_obatmax = DB::table('obatmasuk')->max('id_obatmasuk');
    	$addNol = '';
    	$id_obatmax = str_replace("OBATIN", "", $id_obatmax);
    	$id_obatmax = (int) $id_obatmax + 1;
        $incrementKode = $id_obatmax;

    	if (strlen($id_obatmax) == 1) {
    		$addNol = "000";
    	} elseif (strlen($id_obatmax) == 2) {
    		$addNol = "00";
    	} elseif (strlen($id_obatmax == 3)) {
    		$addNol = "0";
    	}

    	$id_obatbaru = "OBATIN".$addNol.$incrementKode;
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
