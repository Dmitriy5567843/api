<?php

namespace App\Services;

use App\Models\Stations;



class StationService
{


    /**
     * @param array $params
     * @return Stations
     */
    public function create(array $params): Stations
    {
        return Stations::create([
            'name' => $params['name'],
            'station_id' => $params['station_id'],
            'next_station_id' => $params['next_station_id'],
            'crossing' => $params['crossing'],
            'lines_id' => $params['lines_id']
        ]);

    }

    /**
     * @param int $id
     * @param array $params
     * @return Stations
     */
    public function update(int $id, array $params): Stations
    {
        Stations::where('id', $id)->update([
            'name' => $params['name'],
            'station_id' => $params['station_id'],
            'next_station_id' => $params['next_station_id'],
            'crossing' => $params['crossing'],
            'lines_id' => $params['lines_id']

        ]);

        return Stations::where('id', $id)->first();
    }

}
