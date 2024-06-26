<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'mahasiswa';
    protected $fillable = [
        'nim',
        'nama',
        'jurusan'
    ];

    protected $hidden = [];
}
