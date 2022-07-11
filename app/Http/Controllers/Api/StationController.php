<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Station\UpdateRequest;
use App\Http\Resources\StationResource;
use App\Models\Stations;
use App\Services\StationService;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\Station\CreateRequest;

class StationController extends Controller
{
    /**
     * @var StationService
     */
    private StationService $stationService;

    /**
     * @param StationService $stationService
     */
    public function __construct(StationService $stationService)
    {
        $this->stationService = $stationService;
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $station = StationResource::collection(Stations::all());

        return response()->json([
            'data' => [
                'station' => $station
            ],
        ], 200);
    }


    /**
     * @param int $id
     * @return JsonResponse
     */
    public function view(int $id): JsonResponse
    {
        $station = StationResource::collection((Stations::where('id', $id)->get()));
        return response()->json([
            'data' => [
                'station' => $station
            ]
        ], 200);
    }

    /**
     * @param CreateRequest $request
     * @return JsonResponse
     */
    public function create(CreateRequest $request): JsonResponse
    {

        $station = $this->stationService->create($request->validated());
        return response()->json([
            'data' => [
                'station' => $station
            ]
        ], 201);
    }

    /**
     * @param UpdateRequest $request
     * @return JsonResponse
     */
    public function update(UpdateRequest $request): JsonResponse
    {
        $station = $this->stationService->create($request->validated());
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
