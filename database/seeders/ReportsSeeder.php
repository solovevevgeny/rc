<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Report;

class ReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $report = new Report();
        $report->train_id = 1;
        $report->description = "Отличная тренировка, не устал";
        $report->datetime = "2026-05-21 12:00:00";
        $report->save();

        $report = new Report();
        $report->event_id = 1;
        $report->description = "Отличная прошел забег.рф";
        $report->datetime = "2026-05-25 12:00:00";
        $report->save();


    }
}
