<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlansSeeder extends Seeder
{
    
    public function run(): void
    {
    DB::table('plans')->insert([
        'name_plan'=>'Basico',
        'price'=> 10,
        'type_pay'=>'Tarjeta Visa, Paypal',
        'description'=>'Plan basico para usuarios nuevos',
        'created_at' => now(),
        'updated_at' => now(),
        ]);
    DB::table('plans')->insert([
        'name_plan'=>'Premium',
        'price'=> 20,
        'type_pay'=>'Tarjeta Visa, Paypal',
        'description'=>'Plan premium para usuarios aficionados',
        'created_at' => now(),
        'updated_at' => now(),
    ]); 
    DB::table('plans')->insert([
        'name_plan'=>'VIP',
        'price'=> 30,
        'type_pay'=>'Tarjeta Visa, Paypal',
        'description'=>'Plan VIP para usuarios exigentes',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    DB::table('plans')->insert([
        'name_plan'=>'free',
        'price'=> 0,
        'type_pay'=>'no',
        'description'=>'Es gratuito',
        'created_at' => now(),
        'updated_at' => now(),
    ]);     
    
    }
}
