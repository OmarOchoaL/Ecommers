<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'time',
        'image',
        'typefile',
        'description',
        'category_id',
    ];
    use HasFactory;
}
