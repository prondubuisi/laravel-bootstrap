<?php
namespace App\Domains\Meals\Http\Actions;

use App\Domains\Meals\Http\Requests\GetMealsRequest;
use App\Domains\Meals\Http\Resources\MealsResource;
use App\Traits\HasResponse;
use Illuminate\Http\JsonResponse;
use App\Models\Meal;

class GetMealsAction{
    use HasResponse;

    /**
     * Get Allergies
     *
     * @param GetMealsRequest $requestData
     * @return JsonResponse
     */
    public function execute($requestData) : JsonResponse{
        
        $length = $requestData['length'] ?? 20;

        $meals = Meal::paginate($length);
        return $this->successResponseWithCollection('Meals fetched successfully', MealsResource::collection($meals)->response()->getData());
    }
}