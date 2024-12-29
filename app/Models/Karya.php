<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karya extends Model
{
    use HasFactory;

    protected $table = 'karya';

    protected $fillable = [
        'judul',
        'slug',
        'path',
        'deskripsi',
        'nama',
        'kelas',
        'prodi',
    ];

    public static function prodi()
    {
        return [
            'Teknik Informatika' => 'Teknik Informatika',
            'Sistem Informasi' => 'Sistem Informasi',
        ];
    }
}
