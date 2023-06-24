<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $valid = $request->validate([
            'upload' => 'image|file|max:512'
        ]);

        if(!$valid) {
            return redirect('/buatartikel');
        }

        $path = $request->file('upload')->store('artikel');

        return response()->json(['uploaded' => true, 'url' => 'http://localhost:8000/storage/'.$path ]);

    }

}
