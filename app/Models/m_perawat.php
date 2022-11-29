<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_perawat extends Model
{
    use HasFactory;

    protected $table = 'perawat';
    protected $primaryKey = 'id_perawat';

    protected $fillable = [
       ' ID Perawat',
        'Nama Lengkap',
        'Tanggal Lahir',
        'Jenis Kelamin',
        'Alamat',
        'Jadwal Kerja',
        'Foto Perawat',
   

    ];
    use HasFactory;
    public function allData()
    {
        return DB::table('perawat')->get();
    }

    public function detailData($id_perawat)
    {
     return DB::table('perawat')->where('id_perawat', $id_perawat)->first();
    }
 
    public function addData($data)
    {
     DB::table('perawat')->insert($data);
    }
 
    public function editData($id_perawat, $data)
    {
     DB::table('perawat')->where('id_perawat', $id_perawat)->update($data);
    }
 
    public function deleteData($id_perawat)
    {
     DB::table('perawat')->where('id_perawat', $id_perawat)->delete();
    }
 
    public static function id_baru()
     {
         $id_perawatmax = DB::table('perawat')->max('id_perawat');
         $addNol = '';
        $id_perawatmax = str_replace("PER", "", $id_perawatmax);
         $id_perawatmax = (int) $id_perawatmax + 1;
         $incrementKode = $id_perawatmax;

         if (strlen($id_perawatmax) == 1) {
             $addNol = "000";
         } elseif (strlen($id_perawatmax) == 2) {
             $addNol = "00";
         } elseif (strlen($id_perawatmax == 3)) {
             $addNol = "0";
         }
 
         $id_perawatbaru = "PER" .$addNol.$incrementKode;
         return $id_perawatbaru;
     }   
}
