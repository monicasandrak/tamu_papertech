<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_security extends Model
{
    use HasFactory;

    protected $table = 'security';
    protected $primaryKey = 'id_security';

    protected $fillable = [
        'nama_security',
        'tanggal_lahir',
        'alamat',
        'jk',
        'bagian',
        'foto_security',
        

    ];
    public function allData()
    {
        return DB::table('security')->get();
    }

    public function detailData($id_security)
    {
     return DB::table('security')->where('id_security', $id_security)->first();
    }
 
    public function addData($data)
    {
     DB::table('security')->insert($data);
    }
 
    public function editData($id_security, $data)
    {
     DB::table('security')->where('id_security', $id_security)->update($data);
    }
 
    public function deleteData($id_security)
    {
     DB::table('security')->where('id_security', $id_security)->delete();
    }
 
    public static function id_baru()
     {
         $id_securitymax = DB::table('security')->max('id_security');
         $addNol = '';
        $id_securitymax = str_replace("SEC", "", $id_securitymax);
         $id_securitymax = (int) $id_securitymax + 1;
         $incrementKode = $id_securitymax;

         if (strlen($id_securitymax) == 1) {
             $addNol = "000";
         } elseif (strlen($id_securitymax) == 2) {
             $addNol = "00";
         } elseif (strlen($id_securitymax == 3)) {
             $addNol = "0";
         }
 
         $id_securitybaru = "SEC" .$addNol.$incrementKode;
         return $id_securitybaru;
     }   
}
