<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PlansSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorysSeeder::class);
        $this->call(SeriesSeeder::class);
        $this->call(MoviesSeeder::class);
        $this->call(ViewwingSeeder::class);

    }
}
