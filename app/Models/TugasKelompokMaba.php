<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasKelompokMaba extends Model
{
    use HasFactory;

    protected $table = 'tugas_kelompok_maba';

    protected $fillable = [
        'nama_kelompok',
        'link_video',
        'nama_anggota',
        'id_maba',
    ];

    /**
     * Get the maba that owns the TugasKelompokMaba
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maba()
    {
        return $this->belongsTo(Maba::class, 'id_maba');
    }
}
