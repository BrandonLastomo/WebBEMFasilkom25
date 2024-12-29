<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaPb extends Model
{
    use HasFactory;

    protected $table = 'peserta_pb';

    protected $fillable = [
        'id_tim',
        'nama_peserta',
        'nickname',
        'npm',
        'no_hp_peserta',
        'path_foto',
    ];

    /**
     * Get the tim that owns the PesertaPb
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tim()
    {
        return $this->belongsTo(TimPb::class, 'id_tim');
    }

    public function scopeForTim($query, $tim)
    {
        return $query->where('id_tim', $tim->id);
    }
}
