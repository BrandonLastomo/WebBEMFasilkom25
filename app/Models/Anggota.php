<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';

    protected $fillable = [
        'id_user',
        'id_proposal',
        'nama',
        'npm',
        'prodi',
        'tahun_masuk',
        'status',
    ];

    public static function prodi()
    {
        return [
            'S1 Agribisnis' => 'S1 Agribisnis',
            'S1 Agroteknologi' => 'S1 Agroteknologi',
            'S1 Akuntansi' => 'S1 Akuntansi',
            'S1 Farmasi' => 'S1 Farmasi',
            'S1 Hubungan Internasional' => 'S1 Hubungan Internasional',
            'S1 Ilmu Gizi' => 'S1 Ilmu Gizi',
            'S1 Ilmu Hukum' => 'S1 Ilmu Hukum',
            'S1 Ilmu Keolahragaan' => 'S1 Ilmu Keolahragaan',
            'S1 Ilmu Komunikasi' => 'S1 Ilmu Komunikasi',
            'S1 Ilmu Pemerintahan' => 'S1 Ilmu Pemerintahan',
            'S1 Manajemen' => 'S1 Manajemen',
            'S1 Manajemen Pendidikan Islam' => 'S1 Manajemen Pendidikan Islam',
            'S1 Pend. Agama Islam' => 'S1 Pend. Agama Islam',
            'S1 Pend. Bahasa & Sastra Indonesia' => 'S1 Pend. Bahasa & Sastra Indonesia',
            'S1 Pend. Bahasa Inggris' => 'S1 Pend. Bahasa Inggris',
            'S1 Pend. Guru Raudlatul Athfal' => 'S1 Pend. Guru Raudlatul Athfal',
            'S1 Pend. Jasmani, Kesehatan & Rekreasi' => 'S1 Pend. Jasmani, Kesehatan & Rekreasi',
            'S1 Pend. Luar Sekolah' => 'S1 Pend. Luar Sekolah',
            'S1 Pend. Matematika' => 'S1 Pend. Matematika',
            'S1 Sistem Informasi' => 'S1 Sistem Informasi',
            'S1 Teknik Elektro' => 'S1 Teknik Elektro',
            'S1 Teknik Industri' => 'S1 Teknik Industri',
            'S1 Teknik Informatika' => 'S1 Teknik Informatika',
            'S1 Teknik Kimia' => 'S1 Teknik Kimia',
            'S1 Teknik Lingkungan' => 'S1 Teknik Lingkungan',
            'S1 Teknik Mesin' => 'S1 Teknik Mesin',
        ];
    }

    public static function tahun()
    {
        return [
            '2015' => '2015',
            '2016' => '2016',
            '2017' => '2017',
            '2018' => '2018',
            '2019' => '2019',
            '2020' => '2020',
            '2021' => '2021',
        ];
    }

    public static function status()
    {
        return [
            'Ketua Kelompok' => 'Ketua Kelompok',
            'Anggota' => 'Anggota',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function proposal()
    {
        return $this->belongsTo(Proposal::class, 'id_proposal');
    }

    public function scopeForUser($query, $user)
    {
        return $query->where('id_user', $user->id);
    }

    public function scopeForProposal($query, $proposal)
    {
        return $query->where('id_proposal', $proposal->id);
    }
}
