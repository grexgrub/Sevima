<?php

namespace App\utiliti;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class Flasher
{
    public static function setFlash($pesan, $aksi, $alert)
    {
        request()->session()->flash('warning', array(
            'pesan' => $pesan,
            'aksi' => $aksi,
            'alert' => $alert
        ));
    }

    public static function flash()
    {
        if(session('warning')) {
            echo '<div class="z-50 box-loading '. session('warning')['alert'] .' "><strong>'.session('warning')['pesan'].'</strong>'. session('warning')['aksi'] .' <div class="loading"> </div></div>';
        }
    }
}
