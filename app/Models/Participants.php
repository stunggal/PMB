<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'school',
        'registration_number',
        'inggris_lisan',
        'arab_lisan',
        'alquran',
        'ibadah',
        'arab_tulis',
        'inggris_tulis',
        'dirasah_islamiyah',
        'pengetahuan_umum',
        'mtk',
        'fisika',
        'kimia',
        'biologi',
        'tbi',
        'period_id',
        'first_choice',
        'second_choice',
        'third_choice',
        'final_choice',
        'status',
        'first_rank',
        'second_rank',
        'third_rank',
        'fourth_rank',
        'fifth_rank',
    ];
}
