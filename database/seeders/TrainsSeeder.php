<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $train = new Train();
        $train -> order = 0;
        $train -> train_type_id = 1;
        $train -> athlete_id = 1;
        $train -> datetime = "2026-05-21 00:00:00";
        $train->save();
    }
}
