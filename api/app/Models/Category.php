<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];
    use HasFactory;
    public function series()
    {
        return $this->hasMany(Serie::class);
    }
}
