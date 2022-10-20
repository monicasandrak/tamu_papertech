<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_kelola_pasien_tamu extends Model
{
    use HasFactory;
    protected $table = 'tamu';
    protected $primaryKey = 'id_tamu';

    protected $fillable = [
        'tanggal',
        'nama_tamu',
        'alamat',
        'keperluan',
        'bertemu_dengan',
        'no_ktp',
        'foto_ktp',
        'no_kendaraan',
        'jam_masuk',
        'hasil_swab',
    
    ];
}
