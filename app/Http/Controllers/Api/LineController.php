<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Line\CreateRequest;
use App\Http\Requests\Line\UpdateRequest;
use App\Http\Resources\LineResource;
use App\Models\Lines;
use App\Services\LineService;
use Illuminate\Http\JsonResponse;

class LineController extends Controller
{
private LineService $lineService;

    /**
     * @param LineService $lineService
     */
    public function __construct(LineService $lineService)

{
    $this->lineService= $lineService;
}

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $lines = LineResource::collection(Lines::all());

        return response()->json([
            'data' => [
                'lines' => $lines
            ]
        ], 200);

    }


    /**
     * @param int $id
     * @return JsonResponse
     */
    public function view(int $id): JsonResponse
    {
        $line = LineResource::collection((Lines::where('id', $id)->get()));


        return response()->json([
            'data' => [
                'line' => $line
            ]
        ], 200);
    }


    /**
     * @param CreateRequest $request
     * @return JsonResponse
     */
    public function create(CreateRequest $request): JsonResponse
    {
        $line = $this->lineService->create($request->validated());

        return response()->json([
            'data' => [
                'line' => $line
            ]
        ], 201);
    }


    /**
     * @param int $id
     * @param UpdateRequest $request
     * @return JsonResponse
     */
    public function update(int $id, UpdateRequest $request): JsonResponse
    {
     $line = $this->lineService->update($id, $request->validated());

        return response()->json([
            'data' => [
                'line' => $line
            ]
        ], 200);
    }


    /**
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse
    {
        Lines::where('id', $id)->delete();

        return response()->json([
            'data' => [
                'result' => 'success'
            ]
        ], 200);
    }
}
