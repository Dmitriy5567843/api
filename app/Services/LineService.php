<?php

namespace App\Services;

use App\Models\Lines;

class LineService
{

    public function create(array $params): Lines
    {
        return Lines::create([
            'name' => $params['name']
        ]);
    }

    public function update(int $id, array $params): Lines
    {
        Lines::where('id', $id)->update([
            'name' => $params['name']
        ]);

        return Lines::where('id', $id)->first();
    }
}
