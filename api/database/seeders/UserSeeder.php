<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('users')->insert([
            'username'=>'tadeoguapo',
            'password'=>'tadeoguapo',
            'email'=>'tadeoguapo@gmail.com',
            'plan_id'=>1,
            'end_Plan'=>'17/03/2025',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'username'=>'fulanito',
            'password'=>'12345678',
            'email'=>'fulanitofeo@gmail.com',
            'plan_id'=>2,
            'end_Plan'=>'17/03/2025',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
