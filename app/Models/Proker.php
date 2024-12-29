<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
    use HasFactory;

    protected $table = 'proker';

    protected $fillable = [
        'id_departemen',
        'nama_proker',
        'slug',
        'deskripsi',
        'penanggung_jawab',
        'anggaran',
        'status',
        'triwulan',
    ];

    public const BELUMTERLAKSANA = 0;
    public const TERLAKSANA = 1;
    public const ONGOING = 2;

    public const STATUS = [
        self::BELUMTERLAKSANA => 'Belum Terlaksana',
        self::TERLAKSANA => 'Terlaksana',
        self::ONGOING => 'On Progress',
    ];

    public static function status()
    {
        return self::STATUS;
    }

    public function statusLabel()
    {
        $status = $this->status();

        return isset($this->status) ? $status[$this->status] : null;
    }

    public static function triwulan()
    {
        return [
            '1' => '1',
            '1,1' => '1,1',
            '1,2' => '1,2',
            '1,3' => '1,3',
            '1,4' => '1,4',
            '2' => '2',
            '2,1' => '2,1',
            '2,2' => '2,2',
            '2,3' => '2,3',
            '2,4' => '2,4',
            '3' => '3',
            '3,1' => '3,1',
            '3,2' => '3,2',
            '3,3' => '3,3',
            '3,4' => '3,4',
            '4' => '4',
            '4,1' => '4,1',
            '4,2' => '4,2',
            '4,3' => '4,3',
            '4,4' => '4,4',
        ];
    }

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'id_departemen');
    }
}
