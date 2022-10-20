<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_pasien_pegawai extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $primaryKey = 'id_pasien';

    protected $fillable = [
        'tanggal',
        'nama_pasien',
        'departement',
        'keluhan',
        'diagnosa',
        'obat',
    ];
}
