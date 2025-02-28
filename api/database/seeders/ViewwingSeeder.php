<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViewwingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('viewing_history')->insert([
            'user_id'=>1,
            'movie_id'=>1,
            'category_id'=>1,
            'serie_id'=>1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
