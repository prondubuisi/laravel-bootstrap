<?php

namespace App\Domains\Meals\Http\Controllers;

use App\Domains\Meals\Http\Requests\GetMealsRequest;
use App\Domains\Meals\Http\Actions\GetMealsAction;
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

}
