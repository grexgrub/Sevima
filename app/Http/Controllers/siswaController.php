<?php

namespace App\Http\Controllers;

use App\Models\catatan;
use Illuminate\Http\Request;
use App\utiliti\Flasher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\siswa;
use App\Models\materi;
use Carbon\Carbon;

class siswaController extends Controller
{
    public function index()
    {
        return view('siswa.home', [
            'title' => 'siswa.dashboard'
        ]);
    }

    public function catatan()
    {
        return view('siswa.catatan', [
            'title' => 'Catatan',
            'catatan' => catatan::where('noCatatan', session('noSiswa'))->get()
        ]);
    }

    public function buatcatatan()
    {
        return view('siswa.buatcatatan', [
            'title' => 'Buat Catatan',
        ]);
    }
    public function savecatatan(Request $req)
    {
        date_default_timezone_set('Asia/jakarta');

        $valid = Validator::make($req->all(), [
            'judul' => 'required|string',
            'editor' => 'required',
        ])->validateWithBag('save');

        catatan::create([
            'noCatatan' => session('noSiswa'),
            'judul' => $req->judul,
            'slug' => Str::of($req->judul)->slug('-'),
            'catatan' => $req->editor,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Flasher::setFlash('Menyimpan Catatan', 'Berhasil', 'success');
        return back();

    }
    public function materi()
    {
        $siswa = siswa::where('noSiswa', session('noSiswa'))->first();
        $materi = materi::where('kelas', $siswa['kelas'])->paginate(10);


        return view('siswa.home', [
            'title' => 'materi',
            'materi' => $materi,

        ]);
    }
    public function baca($materi)
    {
        $Baca = materi::where('slug', $materi)->first();
        return view('siswa.read', [
            'materi' => $Baca,
            'title' => 'Baca'
        ]);

    }

}
