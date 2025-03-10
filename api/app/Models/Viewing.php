<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viewing extends Model
{
    protected $table = 'viewing_history';
    protected $fillable = [
        'user_id',
        'movie_id',
        'category_id',
        'serie_id',
    ];
    use HasFactory;
}
