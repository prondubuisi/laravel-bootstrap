<?php
namespace App\Domains\Meals\Http\Actions;

use App\Domains\Meals\Http\Requests\GetProteinsRequest;
use App\Domains\Meals\Http\Resources\ProteinsResource;
use App\Traits\HasResponse;
use Illuminate\Http\JsonResponse;
use App\Models\Protein;

class GetProteinsAction{
    use HasResponse;

    /**
     * Get Allergies
     *
     * @param GetProteinsRequest $requestData
     * @return JsonResponse
     */
    public function execute($requestData) : JsonResponse{
        
        $length = $requestData['length'] ?? 20;

        $proteins = Protein::paginate($length);
        return $this->successResponseWithCollection('Proteins fetched successfully', ProteinsResource::collection($proteins)->response()->getData());
    }
}