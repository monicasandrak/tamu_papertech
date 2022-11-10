<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_dokter extends Model
{
    use HasFactory;
    public function allData()
    {
        return DB::table('dokter')->get();
    }

    public function detailData($id_dokter)
    {
     return DB::table('dokter')->where('id_dokter', $id_dokter)->first();
    }
 
    public function addData($data)
    {
     DB::table('dokter')->insert($data);
    }
 
    public function editData($id_dokter, $data)
    {
     DB::table('dokter')->where('id_dokter', $id_dokter)->update($data);
    }
 
    public function deleteData($id_dokter)
    {
     DB::table('dokter')->where('id_dokter', $id_dokter)->delete();
    }
 
    public static function id_baru()
     {
         $id_doktermax = DB::table('dokter')->max('id_dokter');
         $addNol = '';
        $id_doktermax = str_replace("DOK", "", $id_doktermax);
         $id_doktermax = (int) $id_doktermax + 1;
         $incrementKode = $id_doktermax;

         if (strlen($id_doktermax) == 1) {
             $addNol = "000";
         } elseif (strlen($id_doktermax) == 2) {
             $addNol = "00";
         } elseif (strlen($id_doktermax == 3)) {
             $addNol = "0";
         }
 
         $id_dokterbaru = "DOK" .$addNol.$incrementKode;
         return $id_dokterbaru;
     }   
}
