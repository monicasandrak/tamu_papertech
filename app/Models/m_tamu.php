<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_tamu extends Model
{
    use HasFactory;
    public function allData()
    {
        return DB::table('tamu')->get();
    }

    public function detailData($id_tamu)
    {
     return DB::table('tamu')->where('id_tamu', $id_tamu)->first();
    }
 
    public function addData($data)
    {
     DB::table('tamu')->insert($data);
    }
 
    public function editData($id_tamu, $data)
    {
     DB::table('tamu')->where('id_tamu', $id_tamu)->update($data);
    }
 
    public function deleteData($id_tamu)
    {
     DB::table('tamu')->where('id_tamu', $id_tamu)->delete();
    }
 
    public static function id_baru()
     {
         $id_tamumax = DB::table('tamu')->max('id_tamu');
         $addNol = '';
         $id_tamumax = str_replace("TAMU", "", $id_tamumax);
         $id_tamumax = (int) $id_tamumax + 1;
         $incrementKode = $id_tamumax;

         if (strlen($id_tamumax) == 1) {
             $addNol = "000";
         } elseif (strlen($id_tamumax) == 2) {
             $addNol = "00";
         } elseif (strlen($id_tamumax == 3)) {
             $addNol = "0";
         }
 
         $id_tamubaru = "TAMU" .$addNol.$incrementKode;
         return $id_tamubaru;
     }   
}
