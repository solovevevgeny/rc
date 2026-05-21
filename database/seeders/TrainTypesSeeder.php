<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\TrainType;

class TrainTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainType = new TrainType();
        $trainType-> title = "Беговая тренировка";
        $trainType->save();

        $trainType = new TrainType();
        $trainType-> title = "Силовая тренировка";
        $trainType->save();
    }
}
