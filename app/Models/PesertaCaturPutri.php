<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaCaturPutri extends Model
{
    use HasFactory;
    protected $table = 'peserta_catur_putri';

    protected $fillable = [
        'id_turnamen',
        'nama_peserta',
        'npm',
        'nickname',
        'kelas',
        'angkatan',
        'prodi',
        'no_hp_peserta',
        'path_foto',
    ];
}
