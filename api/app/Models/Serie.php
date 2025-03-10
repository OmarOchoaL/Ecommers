<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = [
        'title',
        'seasons',
        'slug',
        'category_id',
        'time',
        'image',
        'mediaserie',
        'typefile',
        'description',
        'category_id',
    ];
    use HasFactory;
}
