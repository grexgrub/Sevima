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
    public function editKelas($namaKelas)
    {

        $kelas = kelas::where('namaKelas', $namaKelas)->first();
        return view('admin.tambahkelas', [
            'title' => 'tambah siswa',
            'tempat' => 'Tambah Kelas',
            'save' => 'true',
            'kelas' => $kelas
        ]);

    }
    public function tambahKelasView()
    {

        return view('admin.tambahkelas', [
            'title' => 'tambah siswa',
            'tempat' => 'Tambah Kelas',
            'save' => 'false'
        ]);
    }
    public function tambahKelas(Request $req)
    {
        $valid = Validator::make($req->all(), [
            'namaKelas' => 'required|unique:kelas,namaKelas',
            'editor' => 'required'
        ])->validateWithBag('tambahKelas');

        if($req->save == 'true') {
            kelas::where('namaKelas', $req->namaKelas)->update(['jadwalKelas' => $req->editor]);
            Flasher::setFlash('Update', 'berhasil', 'success');
            return redirect()->route('admin.tambah.kelas.view')->withInput();
        }

        kelas::create([
            'namaKelas' => $req->namaKelas,
            'jadwalKelas' => $req->editor
        ]);

        Flasher::setFlash('Tambah Kelas', ' berhasil', 'success');

        return redirect()->route('admin.tambah.kelas.view');
    }
    public function jadwalKelasModal(Request $req)
    {
        $jadwal = kelas::where('namaKelas', $req->data)->pluck('jadwalKelas')->first();
        return response()->json($jadwal);

    }
}
