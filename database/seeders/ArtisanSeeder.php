<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtisanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::factory()
        ->times(3)
        ->create();

        foreach(Artisan::all() as $cheese)
        {
            $artisans = Artisan:: inRandomOrder()->take(rand(1,3))->pluck('id');
            $cheese->artisans()->attach($artisons);
        }
    }
}
