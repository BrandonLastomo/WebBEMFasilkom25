<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimMlPutri extends Model
{
    use HasFactory;

    protected $table = 'tim_ml_putri';

    protected $fillable = [
        'nama_tim',
        'id_turnamen',
        'nama_ketua_tim',
        'no_hp',
        'angkatan',
    ];

    /**
     * Get all of the peserta_ml_putri for the TimMlPutri
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peserta_ml_putri()
    {
        return $this->hasMany(PesertaMlPutri::class, 'id_tim');
    }

    /**
     * Get the peserta_cadangan_ml_putri associated with the TimMlPutri
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function peserta_cadangan_ml_putri()
    {
        return $this->hasOne(PesertaCadanganMlPutri::class, 'id_tim');
    }

    /**
     * Get the turnamen that owns the TimMlPutri
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function turnamen()
    {
        return $this->belongsTo(Turnamen::class, 'id_turnamen');
    }
}
