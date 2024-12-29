<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaMc extends Model
{
    use HasFactory;

    protected $table = 'peserta_mc';

    protected $fillable = [
        'id_turnamen',
        'nama_peserta',
        'npm',
        'nickname',
        'id_game',
        'kelas',
        'angkatan',
        'prodi',
        'no_hp_peserta',
        'path_foto',
    ];
}
