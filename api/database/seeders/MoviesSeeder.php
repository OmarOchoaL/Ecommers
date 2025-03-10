<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            'title'=>'Rapidos y Furiosos X',
            'slug'=>'f&fx',
            'category_id'=>2,
            'time'=>'0 minutos, 0 segundos',
            'image'=>'sin miniatura',
            'media'=>'sin archivo',
            'typefile'=>'mp4',
            'description'=>'Rápidos y furiosos X narra la lucha de Dom Toretto (Vin Diesel) y su familia 
            contra Dante Reyes (Jason Momoa)',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
