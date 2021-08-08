<?php
namespace App\Domains\Meals\Http\Actions;

use App\Domains\Meals\Http\Requests\GetSidesRequest;
use App\Domains\Meals\Http\Resources\SidesResource;
use App\Traits\HasResponse;
use Illuminate\Http\JsonResponse;
use App\Models\Side;

class GetSidesAction{
    use HasResponse;

    /**
     * Get Allergies
     *
     * @param GetProteinsRequest $requestData
     * @return JsonResponse
     */
    public function execute($requestData) : JsonResponse{
        
        $length = $requestData['length'] ?? 20;

        $sides = Side::paginate($length);
        return $this->successResponseWithCollection('Sides fetched successfully', SidesResource::collection($sides)->response()->getData());
    }
}