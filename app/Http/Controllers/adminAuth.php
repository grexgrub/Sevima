<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\utiliti\Flasher;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;

class adminAuth extends Controller
{
    public function index()
    {
        return view('admin.login', [
            'title' => 'Admin-Login',
        ]);
    }

    public function register()
    {
        return view('admin.register', [
            'title' => 'Admin-register',
        ]);
    }

    public function _register(Request $req): RedirectResponse
    {


        $valid = Validator::make($req->all(), [
            'email' => 'required|email|string|max:255|unique:admins,email',
            'name' => 'required|string|max:255|unique:admins,name',
            'password' => 'required|min:8'
        ])->validateWithBag('error');


        $token = Str::random(60);

        Admin::create([
            'name' => 'asu',
            'email' => $req->email,
            'password' => $req->password,
            'token' => $token,
        ]);


        return back();


    }

    public function login(Request $request): RedirectResponse
    {


        $valid = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ])->validateWithBag('login');

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password,])) {
            $request->session()->regenerate();
            session(['logedin' => true, 'email' => $request->email]);
            return redirect()->route('admin.dashboard');
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
