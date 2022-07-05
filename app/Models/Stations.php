<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stations extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'station_id', 'next_station_id', 'crossing', 'lines_id',
    ];



}
