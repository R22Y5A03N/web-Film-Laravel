<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_film',
        'bintang_film',
        'sutradara',
        'genre',
        'deskripsi',
        'gambar',
        'tahun_diterbitkan',
    ];
}
