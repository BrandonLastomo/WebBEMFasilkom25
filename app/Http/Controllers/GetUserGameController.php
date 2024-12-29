<?php

namespace App\Http\Controllers;

use App\Models\SkorGame;
use App\Models\UserGame;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class GetUserGameController extends Controller
{
    public function getUser(Request $request)
    {
        $id = $request->id_user;
        $user = UserGame::with(['skor_games'])->findOrFail($id);
        if ($user->skor_games != NULL) {
            $data = [
                'id' => $user['id'],
                'nama_lengkap' => $user['nama_lengkap'],
                'deskripsi' => $user['deskripsi'],
                'skor' => $user->skor_games['skor']
            ];
        } else {
            $data = [
                'id' => $user['id'],
                'nama_lengkap' => $user['nama_lengkap'],
                'deskripsi' => Str::limit($user['deskripsi'], 200, '<small> ....... (deskripsi terlalu panjang)</small>'),
                'skor' => 0
            ];
        }
        return $data;
    }

    public function savescore(Request $request)
    {
        $update = SkorGame::where(['id_user' => $request->id_user])->first();
        if ($update) {
            $skor_awal = $update['skor'];
            $params = [
                'id_user' => $request->id_user,
                'nama' => $request->nama,
                'skor' => $skor_awal + 1
            ];
            $update->update($params);
        } else {
            $params = [
                'id_user' => $request->id_user,
                'nama' => $request->nama,
                'skor' => 1
            ];
            SkorGame::create($params);
        }
    }
}
