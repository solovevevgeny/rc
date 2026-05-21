<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new Event();
        $event->title = "Забег.РФ";
        $event->datetime = "2026-05-25 10:00:00";
        $event->description = "Полумарафон Забег.рф";
        $event->save();

        $event = new Event();
        $event->title = "Групповой лонг";
        $event->datetime = "2026-05-24 10:00:00";
        $event->description = "Групповая тренировка клуба";
        $event->save();
    }
}
