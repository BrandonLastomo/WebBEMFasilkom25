<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'guard_name',
    ];

    public static function defaultPermissions()
    {
        return [
            'Lihat_User',
            'Tambah_User',
            'Edit_User',
            'Hapus_User',

            'Lihat_Role',
            'Tambah_Role',
            'Edit_Role',
            'Hapus_Role',

            'Lihat_Bidang',
            'Tambah_Bidang',
            'Edit_Bidang',
            'Hapus_Bidang',

            'Lihat_Departemen',
            'Tambah_Departemen',
            'Edit_Departemen',
            'Hapus_Departemen',

            'Lihat_Pengurus',
            'Tambah_Pengurus',
            'Edit_Pengurus',
            'Hapus_Pengurus',

            'Lihat_Proker',
            'Tambah_Proker',
            'Edit_Proker',
            'Hapus_Proker',

            'Lihat_Berita',
            'Tambah_Berita',
            'Edit_Berita',
            'Hapus_Berita',

            'Lihat_Acara',
            'Tambah_Acara',
            'Edit_Acara',
            'Hapus_Acara',

            'Lihat_Karya',
            'Tambah_Karya',
            'Edit_Karya', 
            'Hapus_Karya',

            'Lihat_Apr',
            'Tambah_Apr',
            'Edit_Apr',
            'Hapus_Apr',


            'Lihat_Keputrian',
            'Tambah_Keputrian',
            'Edit_Keputrian',
            'Hapus_Keputrian',

            'Lihat_Fcup',
            'Tambah_Fcup',
            'Edit_Fcup',
            'Hapus_Fcup',

            'Lihat_Mading',
            'Tambah_Mading',
            'Edit_Mading',
            'Hapus_Mading',

            'Lihat_Info',
            'Tambah_Info',
            'Edit_Info',
            'Hapus_Info',

            'Lihat_Elearning',
            'Tambah_Elearning',
            'Edit_Elearning',
            'Hapus_Elearning',

            'Lihat_Foto',
            'Tambah_Foto',
            'Edit_Foto',
            'Hapus_Foto',

            'Lihat_Lpj',
            'Tambah_Lpj',
            'Edit_Lpj',
            'Hapus_Lpj',

            'Lihat_Pinjam',
            'Tambah_Pinjam',
            'Edit_Pinjam',
            'Hapus_Pinjam',

            'Lihat_Merchandise',
            'Tambah_Merchandise',
            'Edit_Merchandise',
            'Hapus_Merchandise',

            'Lihat_Program',
            'Tambah_Program',
            'Edit_Program',
            'Hapus_Program',

            'Lihat_Pengumuman',
            'Tambah_Pengumuman',
            'Edit_Pengumuman',
            'Hapus_Pengumuman',

            'Lihat_Pengusul',
            'Tambah_Pengusul',
            'Edit_Pengusul',
            'Hapus_Pengusul',

            'Lihat_Bemitory',
            'Tambah_Bemitory',
            'Edit_Bemitory',
            'Hapus_Bemitory',
            
            'User',

        ];
    }
}
