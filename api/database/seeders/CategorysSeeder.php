<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorys')->insert([
            'name'=>'Terror',
            'slug'=>'terror',
            'description'=>'peliculas y series con violencia, asesinato, paranormal y  suspenso',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorys')->insert([
            'name'=>'Accion',
            'slug'=>'accion',
            'description'=>'peliculas y series con violencia, asesinato, Disparos y secuestro',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorys')->insert([
            'name'=>'Comedia',
            'slug'=>'comedia',
            'description'=>'peliculas y series con chistes, poca violencia, bromas y caidas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
