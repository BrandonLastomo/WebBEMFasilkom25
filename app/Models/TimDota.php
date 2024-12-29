<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimDota extends Model
{
    use HasFactory;

    protected $table = 'tim_dota';

    protected $fillable = [
        'nama_tim',
        'id_turnamen',
        'nama_ketua_tim',
        'no_hp',
        'angkatan',
    ];

    /**
     * Get all of the peserta_dota for the TimDota
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peserta_dota()
    {
        return $this->hasMany(PesertaDota::class, 'id_tim');
    }

    /**
     * Get the peserta_cadangan_dota associated with the TimDota
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function peserta_cadangan_dota()
    {
        return $this->hasOne(PesertaCadanganDota::class, 'id_tim');
    }

    /**
     * Get the turnamen that owns the TimDota
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function turnamen()
    {
        return $this->belongsTo(Turnamen::class, 'id_turnamen');
    }
}
