<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bemitory extends Model
{
 
    use HasFactory;
    protected $table = 'bemitory';
    
    protected $fillable = [
        'kode_barang',
        'barang',
        'jumlah',
        'status_barang',
    ];

    public const TERSEDIA = 0;
    public const KOSONG = 1;
    

    public const STATUS_BARANG = [
        self::TERSEDIA => 'Tersedia',
        self::KOSONG=> 'Kosong',
    ];

    public static function status_barang()
    {
        return self::STATUS_BARANG;
    }

    public function statusLabel()
    {
        $status_barang = $this->status_barang();

        return isset($this->status_barang) ? $status_barang[$this->status_barang] : null;
    }

}
