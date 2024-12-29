<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGame extends Model
{
    use HasFactory;
    protected $table = 'user_game';

    public function skor_games()
    {
        return $this->hasOne(SkorGame::class, 'id_user', 'id');
    }
}
