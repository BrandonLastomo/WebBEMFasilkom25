<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'report';

    protected $guarded = [];

    public const PENDING = 1;
    public const DIPROSES = 2;
    public const SELESAI = 3;
    public const DITOLAK = 4;
    
    public const SISTEM = 1;
    public const REKTORAT = 2;
    public const INFRASTRUKTUR = 3;
    public const PERKULIAHAN_DAN_AKADEMIS = 4;
    public const EVENT = 5;
    public const ORMAWA = 6;
    public const LAINNYA = 7;

    public const STATUS = [
        self::PENDING => 'Pending',
        self::DIPROSES => 'Diproses',
        self::SELESAI => 'Selesai',
        self::DITOLAK => 'Ditolak',
    ];
    
    public const KATEGORI = [
        self::SISTEM => 'sistem',
        self::REKTORAT => 'rektorat',
        self::INFRASTRUKTUR => 'infrastruktur',
        self::PERKULIAHAN_DAN_AKADEMIS => 'perkuliahan dan akademis',
        self::EVENT => 'event',
        self::ORMAWA => 'ormawa',
        self::LAINNYA => 'lainya',
        ];

    public static function status()
    {
        return self::STATUS;
    }

    public static function kategori()
    {
        return self::KATEGORI;
    }
    
    public function statusLabel()
    {
        $status = $this->status();

        return isset($this->status) ? $status[$this->status] : null;
    }
    
    public function kategoriLabel()
    {
        $kategori = $this->kategori();
        
        return isset($this->kategori) ? $kategori[$this->kategori] : null;
    }
}
