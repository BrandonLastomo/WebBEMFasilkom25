<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

// use Illuminate\Database\Eloquent\Model;

class Maba extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $table = 'maba';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'prodi',
        'nama_kelompok',
        'absen_hari_pertama',
        'foto_hari_pertama',
        'absen_hari_kedua',
        'foto_hari_kedua',
    ];

    protected $guard = 'maba';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static function prodi()
    {
        return [
            'S1 Teknik Informatika' => 'S1 Teknik Informatika',
            'S1 Sistem Informasi' => 'S1 Sistem Informasi',
        ];
    }

    /**
     * Get the tugas_individu_maba associated with the Maba
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tugas_individu_maba()
    {
        return $this->hasOne(TugasIndividuMaba::class, 'id_maba');
    }

    /**
     * Get the tugas_kelompok_maba associated with the Maba
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tugas_kelompok_maba()
    {
        return $this->hasOne(TugasKelompokMaba::class, 'id_maba');
    }
}
