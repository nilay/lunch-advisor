<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Ingredient;
use App\Models\Recipe;

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

Route::get('lunch','LunchController@index');

Route::get('ingredients', function() {
    return Ingredient::all();
});

Route::get('recipes', function() {
    return Recipe::all();
});

Route::fallback(function(){
    return response()->json([
        'message' => 'API Endpoint Not Found.'], 404);
});