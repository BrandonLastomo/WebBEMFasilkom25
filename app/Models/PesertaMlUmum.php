<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaMlUmum extends Model
{
    use HasFactory;

    protected $table = 'peserta_ml_umum';

    protected $fillable = [
        'id_tim',
        'nama_peserta',
        'nickname',
        'id_game',
        'no_hp_peserta',
        'path_foto',
    ];

    /**
     * Get the tim that owns the PesertaMlUmum
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tim()
    {
        return $this->belongsTo(TimMlUmum::class, 'id_tim');
    }

    public function scopeForTim($query, $tim)
    {
        return $query->where('id_tim', $tim->id);
    }
}
