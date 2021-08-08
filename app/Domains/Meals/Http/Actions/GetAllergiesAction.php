<?php
namespace App\Domains\Meals\Http\Actions;

use App\Domains\Meals\Http\Requests\GetAllergiesRequest;
use App\Domains\Meals\Http\Resources\AllergiesResource;
use App\Traits\HasResponse;
use Illuminate\Http\JsonResponse;
use App\Models\Allergy;

class GetAllergiesAction{
    use HasResponse;

    /**
     * Get Allergies
     *
     * @param GetAllergiesRequest $requestData
     * @return JsonResponse
     */
    public function execute($requestData) : JsonResponse{
        
        $length = $requestData['length'] ?? 20;

        $allergies = Allergy::paginate($length);
        return $this->successResponseWithCollection('Allergies fetched successfully', AllergiesResource::collection($allergies)->response()->getData());
    }
}