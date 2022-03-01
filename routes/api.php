<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Models\termek;
// use App\Models\alapanyag;
// use App\Models\osszetevo;
// use App\Models\arvaltozas;
// use App\Models\jelenlegiar;
// use App\Models\kedvezmeny;
// use App\Models\nyugtatetel;
// use App\Models\nyugta;
// use App\Models\reklamacio;
// use App\Models\menuosszeall;
// use App\Models\munkakor;
use App\Http\Controllers\dolgozoController;




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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/dolgozo', [dolgozoController::class, 'index']);
Route::put('/dolgozo/id', [dolgozoController::class, 'update']);
Route::get('/dolgozo/{dolgozo}', [dolgozoController::class, 'show']);
Route::delete('/dolgozo/{id}', [dolgozoController::class, 'delete']);
Route::post('/dolgozo', [dolgozoController::class, 'store']);


