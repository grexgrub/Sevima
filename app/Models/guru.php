<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class guru extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    public $timestamps = false;
    public $guard = 'guru';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'token'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}
