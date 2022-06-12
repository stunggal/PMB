<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodes extends Model
{
    use HasFactory;

    protected $fillable = [
        'period',
        'is_active',
    ];
}
