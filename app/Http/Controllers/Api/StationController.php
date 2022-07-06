<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Station\UpdateRequest;
use App\Models\Stations;
use App\Services\StationService;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\Station\CreateRequest;

class StationController extends Controller
{
//    public function __construct(StationService $stationService)
//    {
//        $this->
//    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $station = Stations::all();

        return response()->json([
            'data' => [
                'station' => $station
            ]

        ], 200);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function view(int $id): JsonResponse
    {
        $station = Stations::where('id', $id)->first();
        return response()->json([
            'data' => [
                'station' => $station
            ]
        ],200);

    }

    /**
     * @param CreateRequest $request
     * @param StationService $stationService
     * @return JsonResponse
     */
    public function create(CreateRequest $request, StationService $stationService): JsonResponse


    {

        $station = $stationService->create($request->validated());
        return response()->json([
            'data' => [
                'station' => $station
            ]
        ], 201);
    }

    /**
     * @param UpdateRequest $request
     * @param StationService $stationService
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, StationService $stationService): JsonResponse
    {
        $station = $stationService->create($request->validated());
        return response()->json([
            'data' => [
                'station' => $station
            ]
        ], 201);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse
    {
        Stations::where('id', $id)->delete();

        return response()->json([
            'data' => [
                'result' => 'success'
            ]
        ], 200);
    }
}
