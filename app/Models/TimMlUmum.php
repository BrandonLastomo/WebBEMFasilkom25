<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimMlUmum extends Model
{
    use HasFactory;

    protected $table = 'tim_ml_umum';

    protected $fillable = [
        'nama_tim',
        'id_turnamen',
        'nama_ketua_tim',
        'no_hp',
        'path_bukti_pembayaran',
    ];

    /**
     * Get all of the peserta_ml_umum for the TimMLUmum
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peserta_ml_umum()
    {
        return $this->hasMany(PesertaMlUmum::class, 'id_tim');
    }

    /**
     * Get the peserta_cadangan_ml_umum associated with the TimMLUmum
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function peserta_cadangan_ml_umum()
    {
        return $this->hasOne(PesertaCadanganMlUmum::class, 'id_tim');
    }

    /**
     * Get the turnamen that owns the TimMLUmum
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function turnamen()
    {
        return $this->belongsTo(Turnamen::class, 'id_turnamen');
    }
}
