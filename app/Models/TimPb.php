<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimPb extends Model
{
    use HasFactory;

    protected $table = 'tim_pb';

    protected $fillable = [
        'nama_tim',
        'id_turnamen',
        'nama_ketua_tim',
        'angkatan',
        'no_hp',
    ];

    /**
     * Get all of the peserta_Pb for the TimPb
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peserta_Pb()
    {
        return $this->hasMany(PesertaPb::class, 'id_tim');
    }

    /**
     * Get the peserta_cadangan_Pb associated with the TimPb
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function peserta_cadangan_Pb()
    {
        return $this->hasOne(PesertaCadanganPb::class, 'id_tim');
    }

    /**
     * Get the turnamen that owns the TimPb
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function turnamen()
    {
        return $this->belongsTo(Turnamen::class, 'id_turnamen');
    }
}
