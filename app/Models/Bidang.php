<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    protected $table = 'bidang';

    protected $fillable = [
        'nama',
        'slug'
    ];

    public function departemen()
    {
        return $this->hasMany(Departemen::class, 'id_bidang');
    }

    public function pengurus()
    {
        return $this->hasMany(Pengurus::class, 'bidang');
    }
}
