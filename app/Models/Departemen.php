<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;

    protected $table = 'departemen';

    protected $fillable = [
        'nama',
        'slug',
        'id_bidang',
        'deskripsi',
    ];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'id_bidang');
    }

    public function departemen()
    {
        return $this->hasMany(Pengurus::class, 'id_departemen');
    }
}
