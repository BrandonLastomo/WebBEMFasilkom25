<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $table = 'proposal';

    protected $fillable = [
        'judul',
        'slug',
        'jenis',
        'path',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public static function jenis()
    {
        return [
            'PKM-AI' => 'PKM-AI',
            'PKM-GFK' => 'PKM-GFK',
            'PKM-GT' => 'PKM-GT',
            'PKM-K' => 'PKM-K',
            'PKM-KC' => 'PKM-KC',
            'PKM-PI' => 'PKM-PI',
            'PKM-PM' => 'PKM-PM',
            'PKM-R' => 'PKM-R',
        ];
    }

    public function scopeForUser($query, $user)
    {
        return $query->where('id_user', $user->id);
    }
}
