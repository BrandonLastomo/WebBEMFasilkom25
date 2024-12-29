<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasIndividuMaba extends Model
{
    use HasFactory;

    protected $table = 'tugas_individu_maba';

    protected $fillable = [
        'nama_lengkap',
        'nama_kelompok_individu',
        'prodi',
        'link_video_individu',
        'id_maba',
    ];

    /**
     * Get the maba that owns the TugasIndividuMaba
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maba()
    {
        return $this->belongsTo(Maba::class, 'id_maba');
    }
}
