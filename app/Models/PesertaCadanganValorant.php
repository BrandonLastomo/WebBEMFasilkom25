<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaCadanganValorant extends Model
{
    use HasFactory;

    protected $table = 'peserta_cadangan_valorant';

    protected $fillable = [
        'id_tim',
        'nama_peserta_cadangan',
        'npm_peserta_cadangan',
        'nickname_peserta_cadangan',
        'id_game_peserta_cadangan',
        'no_hp_peserta_cadangan',
        'path_foto_peserta_cadangan',
    ];

    /**
     * Get the tim that owns the PesertaCadanganValorant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tim()
    {
        return $this->belongsTo(TimValorant::class, 'id_tim');
    }

    public function scopeForTim($query, $tim)
    {
        return $query->where('id_tim', $tim->id);
    }
}
