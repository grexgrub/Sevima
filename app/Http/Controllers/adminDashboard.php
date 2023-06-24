<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\kelas;
use App\utiliti\Flasher;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class adminDashboard extends Controller
{
    public function index()
    {
        $dataKelas = kelas::get();
        return view('admin.dashboard', [
            'title' => 'dashboard',
            'tempat' => 'Kelas',
            'kelas' => $dataKelas
        ]);
    }
    public function tambahKelasView()
    {

        return view('admin.tambahkelas', [
            'title' => 'tambah siswa',
            'tempat' => 'Tambah Kelas',
        ]);
    }
    public function tambahKelas(Request $req)
    {
        $valid = Validator::make($req->all(), [
            'namaKelas' => 'required',
            'editor' => 'required'
        ])->validateWithBag('tambahSiswa');

        kelas::create([
            'namaKelas' => $req->namaKelas,
            'jadwalKelas' => $req->editor
        ]);

        Flasher::setFlash('Tambah Kelas', ' berhasil', 'success');

        return redirect()->route('admin.tambah.kelas.view');
    }
}
