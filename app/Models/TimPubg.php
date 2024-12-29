<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimPubg extends Model
{
    use HasFactory;

    protected $table = 'tim_pubg';

    protected $fillable = [
        'nama_tim',
        'id_turnamen',
        'nama_ketua_tim',
        'no_hp',
        'path_bukti_pembayaran',
    ];

    /**
     * Get all of the peserta_pubg for the TimPubg
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peserta_pubg()
    {
        return $this->hasMany(PesertaPubg::class, 'id_tim');
    }

    /**
     * Get the peserta_cadangan_pubg associated with the TimPubg
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function peserta_cadangan_pubg()
    {
        return $this->hasOne(PesertaCadanganPubg::class, 'id_tim');
    }

    /**
     * Get the turnamen that owns the TimPubg
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function turnamen()
    {
        return $this->belongsTo(Turnamen::class, 'id_turnamen');
    }
}
