<?php

namespace App\Http\Controllers;

use App\Http\Middleware\user;
use Illuminate\Http\Request;
use App\Models\artikel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->user = Auth::user();

            return $next($request);
        });

    }

    public function coba()
    {
        return view('main.coba', [
            'title' => 'bug',
        ]);
    }



    public function index()
    {
        $artikel = artikel::where('uploaded', true)->paginate(10);


        return view('main/home', [
            'title' => 'artikel',
            'artikel' => $artikel,

        ]);
    }

    public function myartikel()
    {
        $artikel = artikel::where('id_artikel', session('username'))->paginate(15);
        return view('main/myartikel', [
            'title' => 'myartikel',
            'artikel' => $artikel
        ]);
    }


    public function buatartikel()
    {
        return view('main/buatartikel', [
            'title' => 'buatartikel',
        ]);
    }


    public function uploadArtikel($action, Request $request): RedirectResponse
    {
        date_default_timezone_set('Asia/jakarta');


        $valid = $request->validate([
            'judul' => 'required|regex:/^[\pL\s\-]+$/u',
            'description' => 'nullable|max:100',
            'second_desc' => 'max:300',
            'editor' => 'required|min:20'
        ]);

        if(!$valid) {
            $errors = $validator->errors();
            return back()->with($errors)->withInput();
        }

        $desc = '';
        if($request->description == null) {
            $desc = $request->second_desc;
        } else {
            $desc = Str::words(request()->description, 5, '...');
        }


        artikel::create([
            'id_artikel' => session('username'),
            'judul' => $request->judul,
            'deskripsi' => $desc,
            'slug' => Str::of($request->judul)->slug('-'),
            'isi' => $request->editor,
            'uploaded' => ($action == 'upload' ? true : false),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->to('/myartikel');
    }



    public function search()
    {
        $artikel = artikel::where('judul', 'like', '%'.request()->data.'%')->latest()->paginate(10);
        if(request()->ajax()) {

            return response()->json($artikel);
        }
        return view('main.search', [
            'title' => 'artikel',
            'artikel' => $artikel
        ]);
    }


    public function baca($artikel)
    {
        $Baca = artikel::where('slug', $artikel)->first();
        return view('main.read', [
            'artikel' => $Baca,
            'title' => 'Baca'
        ]);

    }

    public function edit($slug)
    {
        $artikel = artikel::where('slug', $slug)->first();
        return view('main.edit', [
            'title' => 'Edit',
            'artikel' => $artikel
        ]);

    }

    public function delete($slug)
    {
        artikel::where('slug', $slug)->where('id_artikel', session('username'))->delete();
        return redirect()->route('artikel.myartikel');
    }

        public function myArtikelStatus($status)
        {
            $isUploaded = true;
            ($status == 'uploaded' ? $isUploaded = true : $isUploaded = false);
            $artikel = artikel::where('uploaded', $isUploaded)->paginate(10);
            return view('main.myartikel', [
                'title' => 'myartikel',
                'artikel' => $artikel
            ]);

        }

        public function myArtikelSearch()
        {
            $artikel = artikel::where('id_artikel', session('username'))->where('judul', 'like', '%'.request()->data.'%')->latest()->paginate(10);
            if(request()->ajax()) {
                return response()->json($artikel);
            }
            return view('main.search', [
                'title' => 'artikel',
                'artikel' => $artikel
            ]);
        }

        public function cobaData()
        {
            $artikel = artikel::get();
            return response()->json($artikel);
        }

}
