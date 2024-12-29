<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus  extends Model
{
    use HasFactory;

    protected $table = 'pengurus';

    protected $fillable = [
        'nama',
        'jabatan',
        'id_bidang',
        'id_departemen',
        'npm',
        'no_hp',
    ];

    public static function jabatan()
    {
        return [
            'Ketua Umum' => 'Ketua Umum',
            'Wakil Ketua' => 'Wakil Ketua',
            'Sekretaris Umum' => 'Sekretaris Umum',
            'Wakil Sekretaris' => 'Wakil Sekretaris',
            'Bendahara Umum' => 'Bendahara Umum',
            'Wakil Bendahara' => 'Wakil Bendahara',
            'Koordinator Bidang' => 'Koordinator Bidang',
            'Koordinator Departemen' => 'Koordinator Departemen',
            'Anggota' => 'Anggota',
        ];
    }

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'id_bidang');
    }

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'id_departemen');
    }

    public function proker()
    {
        return $this->belongsTo(Proker::class, 'id_departemen');
    }
}
