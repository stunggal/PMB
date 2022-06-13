<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    use HasFactory;

    protected $fillable = [
        'inggris_lisan',
        'arab_lisan',
        'alquran',
        'ibadah',
        'inggris_tulis',
        'arab_tulis',
        'beban_prodi',
        'matrik',
        'fail',
    ];
}
