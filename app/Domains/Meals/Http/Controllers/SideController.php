<?php

namespace App\Domains\Meals\Http\Controllers;

use App\Domains\Meals\Http\Requests\GetSidesRequest;
use App\Domains\Meals\Http\Actions\GetSidesAction;
use App\Http\Controllers\Controller;

class SideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetSidesRequest $request)
    {
        return (new GetSidesAction)->execute($request->validated());
    }
    
}
