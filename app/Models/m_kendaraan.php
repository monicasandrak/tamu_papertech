<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $primaryKey = 'id_pengendara';

    protected $fillable = [
        'nama_pengendara',
        'posisi',
        'departement',
        'jenis_kendaraan',
        'no_kendaraan',
        'pemeriksa_kendaraan',
        'tanggal_pajak',
        'status_pajak',
        'status_sim',
        'status_akhir',
    ];

    public function allData()
    {
        return DB::table('kendaraan')->get();
    }

    public function detailData($id_pengendara)
    {
     return DB::table('kendaraan')->where('id_pengendara', $id_pengendara)->first();
    }
 
    public function addData($data)
    {
     DB::table('kendaraan')->insert($data);
    }
 
    public function editData($id_pengendara, $data)
    {
     DB::table('kendaraan')->where('id_pengendara', $id_pengendara)->update($data);
    }
 
    public function deleteData($id_pengendara)
    {
     DB::table('kendaraan')->where('id_pengendara', $id_pengendara)->delete();
    }
 
    public static function id_baru()
     {
         $id_pengendaramax = DB::table('kendaraan')->max('id_pengendara');
         $addNol = '';
        $id_pengendaramax = str_replace("PK", "", $id_pengendaramax);
         $id_pengendaramax = (int) $id_pengendaramax + 1;
         $incrementKode = $id_pengendaramax;

         if (strlen($id_pengendaramax) == 1) {
             $addNol = "000";
         } elseif (strlen($id_pengendaramax) == 2) {
             $addNol = "00";
         } elseif (strlen($id_pengendaramax == 3)) {
             $addNol = "0";
         }
 
         $id_pengendarabaru = "PK" .$addNol.$incrementKode;
         return $id_pengendarabaru;
     }   
}
