<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\utiliti\Flasher;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;

class guruController extends Controller
{
    public function index()
    {
        return view('guru.login', [
            'title' => 'guru-Login',
        ]);
    }

    public function register()
    {
        return view('guru.register', [
            'title' => 'guru-register',
        ]);
    }


    public function _register(Request $req): RedirectResponse
    {


        $valid = Validator::make($req->all(), [
            'email' => 'required|email|string|max:255|unique:gurus,email',
            'name' => 'required|string|max:255',
            'password' => 'required|min:8'
        ])->validateWithBag('error');


        $token = Str::random(60);

        guru::create([
            'nama' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'token' => $token,
        ]);


        return back();


    }
    public function dashboard()
    {
        return view('guru.home', [
            'title' => 'Materi'
        ]);
    }
    public function login(Request $request): RedirectResponse
    {


        $valid = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ])->validateWithBag('login');

        if (Auth::guard('guru')->attempt(['email' => $request->email, 'password' => $request->password,])) {
            $request->session()->regenerate();
            session(['logedin' => true, 'email' => $request->email]);
            return redirect()->route('guru.dashboard');
        }

        Flasher::setFlash('Login gagal ', 'cek kembali data yang anda masukan', 'warning');
        return back();
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerate();

        return redirect()->route('admin.login');
    }
}
