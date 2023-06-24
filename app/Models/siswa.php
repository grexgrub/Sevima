<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class siswa extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    public $timestamps = false;
    public $guard = 'siswa';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'token',
        'kelas',
        'umur',
        'noAbsen',
        'noSiswa',
        'aktif',
        'jenisKelamin'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}
