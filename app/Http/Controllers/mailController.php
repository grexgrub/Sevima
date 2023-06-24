<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\verify;

class mailController extends Controller
{
    public static function index($token, $email)
    {
        $rahasia = $token[0];
        $url = 'http://localhost:8000/verify/'.$rahasia.'';

        Mail::to($email)->send(new verify($url));

    }
}
