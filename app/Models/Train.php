<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'train_type_id',
        'athlete_id',
        'datetime',
        'finished_at',
    ];

    protected $casts = [
        'datetime' => 'datetime',
        'finished_at' => 'datetime',
    ];
}
