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
            'image'=>'https://www.adnradio.cl/resizer/v2/QR3GGSG7R5PBVOJCOKW5PWUQPY.jpg?auth=2131411a7bb41299b2867835459338c2e4e691b0e596d4a50bdf13149a0e974d&width=1600&height=1200&quality=70&smart=true',
            'media'=>'sin archivo',
            'typefile'=>'mp4',
            'description'=>'Rápidos y furiosos X narra la lucha de Dom Toretto (Vin Diesel) y su familia 
            contra Dante Reyes (Jason Momoa)',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
