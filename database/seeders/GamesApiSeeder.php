<?php

namespace Database\Seeders;

use App\Models\Games_api;
use Illuminate\Database\Seeder;

class GamesApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Games_api::create([
            'title' => 'Mobile Legends',
            'description' => 'This mobile legends is a failure',
        ]);
    }
}
