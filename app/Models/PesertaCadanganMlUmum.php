<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaCadanganMlUmum extends Model
{
    use HasFactory;

    protected $table = 'peserta_cadangan_ml_umum';

    protected $fillable = [
        'id_tim',
        'nama_peserta_cadangan',
        'nickname_peserta_cadangan',
        'id_game_peserta_cadangan',
        'no_hp_peserta_cadangan',
        'path_foto_peserta_cadangan',
    ];

    /**
     * Get the tim that owns the PesertaCadanganMlUmum
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
