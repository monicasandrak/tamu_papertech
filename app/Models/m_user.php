<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class m_user extends Model
{
    public function allData()
    {
        return DB::table('users')->get();
    }

    public function detailData($id)
    {
     return DB::table('users')->where('id', $id)->first();
    }
 
    public function addData($data)
    {
     DB::table('users')->insert($data);
    }
 
    public function editData($id, $data)
    {
     DB::table('users')->where('id', $id)->update($data);
    }
 
    public function deleteData($id)
    {
     DB::table('users')->where('id', $id)->delete();
    }
 
    public static function id_baru()
     {
         $id_usermax = DB::table('users')->max('id');
         $addNol = '';
        //  $id_usermax = str_replace("USER", "", $id_usermax);
         $id_usermax = (int) $id_usermax + 1;
         $incrementKode = $id_usermax;

         if (strlen($id_usermax) == 1) {
             $addNol = "000";
         } elseif (strlen($id_usermax) == 2) {
             $addNol = "00";
         } elseif (strlen($id_usermax == 3)) {
             $addNol = "0";
         }
 
         $id_userbaru = "" .$addNol.$incrementKode;
         return $id_userbaru;
     }   
}
