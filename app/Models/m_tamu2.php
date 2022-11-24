<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_tamu2 extends Model
{
    use HasFactory;
    protected $table = 'tamu';
    protected $primaryKey = 'id_tamu';

    protected $fillable = [
        'nama_tamu',
        'alamat',
        'pekerjaan',
        'keperluan',
        'bertemu_dengan',
        'no_ktp',
        'foto_ktp',
        'no_kendaraan',
        'jam_masuk',
        'status',
        'swab',
        'hasil_swab',

    ];
}
