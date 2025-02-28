<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('series')->insert([
            'title'=>'The Walking Dead',
            'seasons'=>'13 Temporadas',
            'slug'=>'tdw',
            'category_id'=>1,
            'time'=>'0 minutos, 0 segundos',
            'image'=>'sin miniatura',
            'typefile'=>'mp4',
            'description'=>'La serie sigue a Rick Grimes, un sheriff de condado que se encuentra
            en medio de un apocalipsis zombi.',
            'created_at'=>now(),
            'updated_at'=>now()

        ]);
    }
}
