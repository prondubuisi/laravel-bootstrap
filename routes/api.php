<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Domains\Meals\Http\Controllers\AllergyController;
use App\Domains\Meals\Http\Controllers\ProteinController;
use App\Domains\Meals\Http\Controllers\SideController;
use App\Domains\Meals\Http\Controllers\MealController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'meals'], function () {
    Route::get('meals', [MealController::class, 'index'])->name('meals.list');
    Route::get('sides', [SideController::class, 'index'])->name('sides.list');
    Route::get('proteins', [ProteinController::class, 'index'])->name('proteins.list');
    Route::get('allergies', [AllergyController::class, 'index'])->name('allergies.list');
    Route::get('recommendation', [AllergyController::class, 'index'])->name('meal.recommend');
});
