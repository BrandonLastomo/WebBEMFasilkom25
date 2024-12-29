<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkorGame extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'nama',
        'skor'
    ];

    public function user_game()
    {
        return $this->belongsTo(UserGame::class, 'id_user', 'id');
    }
}
