<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\utiliti\Flasher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class siswaAuth extends Controller
{
    public function index()
    {
        return view('siswa.login', [
            'title' => 'login-siswa'
        ]);
    }

    public function register()
    {
        return view('siswa.register', [
            'title' => 'register-siswa'
        ]);
    }


    public function _register(Request $req): RedirectResponse
    {


        $valid = Validator::make($req->all(), [
            'noSiswa' => 'required|integer|exists:siswas,noSiswa',
            'email' => 'required|email|string|max:255|unique:siswas,email',
            'nama' => 'required|string|max:255|',
            'umur' => 'required|integer',
            'password' => 'required|min:8',
            'jenisKelamin' => 'required'
        ])->validateWithBag('siswaRegister');

        $token = Str::random(60);

        siswa::where('noSiswa', $req->noSiswa)->update([
            'nama' => $req->nama,
            'email' => $req->email,
            'umur' => $req->umur,
            'password' => Hash::make($req->password),
            'jenisKelamin' => $req->jenisKelamin,
            'aktif' => true,
            'token' => $token,
        ]);


        Flasher::setFlash('Registrasi', ' berhasin', 'success');
        return redirect()->route('siswa.login');


    }

    public function login(Request $req): RedirectResponse
    {
        $valid = Validator::make($req->all(), [
            'noSiswa' => 'required|integer',
            'password' => 'required',
        ])->validateWithBag('login');


        if (Auth::guard('siswa')->attempt(['noSiswa' => $req->noSiswa, 'password' => $req->password])) {
            $req->session()->regenerate();
            session(['logedin' => true, 'noSiswa' => $req->noSiswa]);
            return redirect()->route('siswa.dashboard');
        }

        Flasher::setFlash('Login gagal ', 'cek kembali data yang anda masukan', 'warning');
        return back();



    }
}
