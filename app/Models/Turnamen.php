<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turnamen extends Model
{
    use HasFactory;

    protected $table = 'turnamen';

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'path',
    ];

    public static function angkatan()
    {
        return [
            '2018' => '2018',
            '2019' => '2019',
            '2020' => '2020',
        ];
    }

    public static function prodi()
    {
        return [
            'Teknik Informatika' => 'Teknik Informatika',
            'Sistem Informasi' => 'Sistem Informasi',
        ];
    }
}
