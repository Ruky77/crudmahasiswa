<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Mahasiswa extends Model
{
    protected $fillable = [
        'nim',
        'nama_lengkap',
        'jurusan',
        'tempat_lahir',
        'tanggal_lahir',
        'nomer_telepon',
        'email',
        'alamat_tinggal',
        'foto'
    ];
}

