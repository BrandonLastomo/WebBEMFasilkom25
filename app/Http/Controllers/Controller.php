<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use DateTime;
use DateTimeZone;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $data = [];

    public function __construct()
    {
        $this->initAdminMenu();
        $this->initPkmMenu();
        $this->greeting();
        $this->pengurus();
    }

    public function initAdminMenu()
    {
        $this->data['currentAdminMenu'] = 'dashboard';
        $this->data['currentAdminSubMenu'] = '';
    }

    public function initPkmMenu()
    {
        $this->data['currentPkmMenu'] = 'beranda';
        $this->data['currentPkmSubMenu'] = '';
    }

    public function greeting()
    {
        $tz = 'Asia/Jakarta';
        $dt = new DateTime("now", new DateTimeZone($tz));
        $timestamp = $dt->format('G:i');

        // $jam = date("H:i");

        if ($timestamp >= "05:00" && $timestamp < "10:00") {
            $waktu = "Pagi";
        } elseif ($timestamp >= "10:00" && $timestamp < "15:00") {
            $waktu = "Siang";
        } elseif ($timestamp < "18:00") {
            $waktu = "Sore";
        } else {
            $waktu = "Malam";
        }

        $this->data['greeting'] = "Selamat $waktu";
    }

    public function pengurus()
    {
        $this->data['pengurus'] = Pengurus::with('bidang', 'departemen')->get();
    }
}
