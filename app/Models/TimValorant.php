<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimValorant extends Model
{
    use HasFactory;

    protected $table = 'tim_valorant';

    protected $fillable = [
        'nama_tim',
        'id_turnamen',
        'nama_ketua_tim',
        'no_hp',
        'path_bukti_pembayaran',
        'angkatan'
    ];

    /**
     * Get all of the peserta_valorant for the TimValorant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peserta_valorant()
    {
        return $this->hasMany(PesertaValorant::class, 'id_tim');
    }

    /**
     * Get the peserta_cadangan_valorant associated with the TimValorant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function peserta_cadangan_valorant()
    {
        return $this->hasOne(PesertaCadanganValorant::class, 'id_tim');
    }

    /**
     * Get the turnamen that owns the TimValorant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function turnamen()
    {
        return $this->belongsTo(Turnamen::class, 'id_turnamen');
    }
}
