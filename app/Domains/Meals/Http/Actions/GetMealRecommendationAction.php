<?php
namespace App\Domains\Meals\Http\Actions;

use App\Domains\Meals\Http\Requests\RecommendMealsRequest;

use App\Traits\HasResponse;
use Illuminate\Http\JsonResponse;
use App\Domains\Meals\Http\Resources\MealsResource;
use App\Models\Meal;
use App\Models\Allergy;

class GetMealRecommendationAction{
    use HasResponse;

    /**
     * Get Meal recommendation based on allergies
     *
     * @param RecommendMealsRequest $requestData
     * @return JsonResponse
     */
    public function execute($requestData) : JsonResponse{
        
        $length = $requestData['length'] ?? 5;
        $recommendations = [];

        foreach ($requestData["allergies"] as $allergy){
            $allergyIds = [];
            foreach($allergy as $allergyUid){
                $allergyIds[] = Allergy::findByUid($allergyUid)->id;
            }
            $query = Meal::query();
            foreach ($allergyIds as  $id){
                $query->whereJsonDoesntContain('allergy_ids',$id);
            }
            $recommendations[] =  MealsResource::collection($query->paginate($length))->response()->getData();
            
        }

        return $this->successResponse('Meal Recommendation fetched successfully',  $recommendations);
    }
}