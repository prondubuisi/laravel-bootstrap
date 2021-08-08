<?php

namespace App\Domains\Meals\Http\Controllers;

use App\Domains\Meals\Http\Requests\GetProteinsRequest;
use App\Domains\Meals\Http\Actions\GetProteinsAction;
use App\Http\Controllers\Controller;


class ProteinController extends Controller
{
    /**
     * Display a listing of the Protein resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetProteinsRequest $request)
    {
       return (new GetProteinsAction)->execute($request->validated());
    }
}
