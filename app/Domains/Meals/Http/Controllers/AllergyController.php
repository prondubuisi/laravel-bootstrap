<?php

namespace App\Domains\Meals\Http\Controllers;

use App\Domains\Meals\Http\Requests\GetAllergiesRequest;
use App\Domains\Meals\Http\Actions\GetAllergiesAction;
use App\Http\Controllers\Controller;

class AllergyController extends Controller
{
   
    /**
     * Display a listing of Allergy resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetAllergiesRequest $request)
    {
       return (new GetAllergiesAction)->execute($request->validated());
    }

}
