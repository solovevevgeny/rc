<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
            ->where('athlete_id','=', $user_id)
            ->orderBy('trains.datetime')
            ->get();
    }

    /**
     * create new train (POST REQUEST)
     */
    public function create(Request $request) {
        $validated = $request->validate([
            'order' => ['required', 'integer'],
            'train_type_id' => ['required', 'integer', 'exists:train_types,id'],
            'athlete_id' => ['required', 'integer', 'exists:users,id'],
            'datetime' => ['required', 'date'],
            'finished_at' => ['nullable', 'date'],
        ]);

        $train = Train::create($validated);

        return response()->json($train, 201);
    }

}
