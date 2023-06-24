<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\kelas;
use App\Models\siswa;
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
        if($req->save == 'true') {
            kelas::where('id', $req->namaKelas)->update(['jadwalKelas' => $req->editor]);
            Flasher::setFlash('Update', ' berhasil', 'success');
            return redirect()->route('admin.dashboard')->withInput();
        }
        $valid = Validator::make($req->all(), [
            'namaKelas' => 'required|unique:kelas,namaKelas',
            'editor' => 'required'
        ])->validateWithBag('tambahKelas');


        kelas::create([
            'namaKelas' => $req->namaKelas,
            'jadwalKelas' => $req->editor,
            'jumlahMurid' => 0
        ]);

        Flasher::setFlash('Tambah Kelas', ' berhasil', 'success');

        return redirect()->route('admin.tambah.kelas.view');
    }
    public function jadwalKelasModal(Request $req)
    {
        $jadwal = kelas::where('namaKelas', $req->data)->pluck('jadwalKelas')->first();
        return response()->json($jadwal);

    }
    public function deleteKelas($namaKelas)
    {
        kelas::where('namaKelas', $namaKelas)->delete();
        return back();
    }
    public function search(Request $req)
    {
        $kelas = kelas::where('namaKelas', 'like', '%'.$req->data.'%')->get();
        return response()->json($kelas);
    }
    public function searchSiswa(Request $req)
    {
        $siswa = siswa::where('nama', 'like', '%'.$req->data.'%')->orWhere('kelas', 'like', '%'.$req->data.'%')->get();
        return response()->json($siswa);
    }
    public function siswa()
    {
        $siswa = siswa::get();
        return view('admin.siswa', [
            'title' => 'siswa',
            'tempat' => 'SISWA',
            'siswa' => $siswa
        ]);
    }
    public function detailSiswa($noSiswa)
    {
        $siswa = siswa::where('noSiswa', $noSiswa)->first();
        return view('admin.detailSiswa', [
            'title' => 'detail-siswa',
            'tempat' => 'Detail Siswa',
            'siswa' => $siswa,
        ]);
    }
    public function tambahSiswaView()
    {

        return view('admin.tambahsiswa', [
            'title' => 'admin->siswa',
            'tempat' => 'Tambah Siswa',
        ]);
    }
    public function tambahSiswa(Request $req)
    {
        $valid = Validator::make($req->all(), [
            'noSiswa' => 'required|unique:siswas,noSiswa|integer',
            'Kelas' => 'required|exists:kelas,namaKelas',
            'noAbsen' => 'required|integer',
        ])->validateWithBag('tambahKelas');


        siswa::create([
            'noSiswa' => $req->noSiswa,
            'kelas' => $req->Kelas,
            'noAbsen' => $req->noAbsen
        ]);

        Flasher::setFlash('Tambah Siswa', ' berhasil', 'success');

        return redirect()->route('admin.tambah.siswa.view');
    }
}
