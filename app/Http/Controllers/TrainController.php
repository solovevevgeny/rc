<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index(int $user_id)
    {
        return Train::query()
            ->join('train_types', 'train_types.id', '=', 'trains.train_type_id')
            ->select([
                'trains.id',
                'train_types.title as train_type',
                'trains.athlete_id',
                'trains.datetime as date',
                'trains.finished_at as finished',
            ])
            ->where('athlete_id','=', $user_id)
            ->orderBy('trains.datetime')
            ->get();
    }

    public function week(int $user_id)
    {
        $startOfWeek = Carbon::now()->startOfWeek(Carbon::MONDAY);
        $endOfWeek = (clone $startOfWeek)->endOfWeek(Carbon::SUNDAY);

        return Train::query()
            ->join('train_types', 'train_types.id', '=', 'trains.train_type_id')
            ->whereBetween('trains.datetime', [$startOfWeek, $endOfWeek])
            ->select([
                'trains.id',
                'train_types.title as train_type',
                'trains.athlete_id',
                'trains.datetime as date',
                'trains.finished_at as finished',
            ])
            // ->where('athlete_id','=', $user_id)
            ->orderBy('trains.datetime')
            ->get();
    }
}
