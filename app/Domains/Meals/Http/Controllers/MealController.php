<?php

namespace App\Domains\Meals\Http\Controllers;

use App\Domains\Meals\Http\Actions\GetMealsAction;
use App\Domains\Meals\Http\Requests\GetMealsRequest;
use App\Domains\Meals\Http\Actions\GetMealRecommendationAction;
use App\Domains\Meals\Http\Requests\RecommendMealsRequest;
use App\Http\Controllers\Controller;

class MealController extends Controller
{
    /**
     * Display a listing of the Meal resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetMealsRequest $request)
    {
        return (new GetMealsAction)->execute($request->validated());
    }

    /**
     * Recommend meals based on Allergies.
     *
     * @return \Illuminate\Http\Response
     */
    public function recommend(RecommendMealsRequest $request)
    {
        
       return (new GetMealRecommendationAction)->execute($request->validated());
    }

}
