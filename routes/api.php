<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\termekController;
use App\Http\Controllers\alapanyagController;
use App\Http\Controllers\osszetevoController;
use App\Http\Controllers\kedvezmenyController;
use App\Http\Controllers\nyugtatetelController;
use App\Http\Controllers\nyugtaController;
use App\Http\Controllers\reklamacioController;
use App\Http\Controllers\menuosszeallController;
use App\Http\Controllers\munkakorController;
use App\Http\Controllers\dolgozoController;
use App\Http\Controllers\elmult10pRendController;
use App\Http\Controllers\munkaKapcsController;



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

Route::get('/elmult10perc', [elmult10pRendController::class, 'index']);
Route::get('/dolgozoMunka', [munkaKapcsController::class, 'index']);

Route::get('/termek', [termekController::class, 'index']);
Route::put('/termek/{id}', [termekController::class, 'update']);
Route::get('/termek/{termek}', [termekController::class, 'show']);
Route::delete('/termek/{id}', [termekController::class, 'delete']);
Route::post('/termek', [termekController::class, 'store']);

Route::get('/alapanyag', [alapanyagController::class, 'index']);
Route::put('/alapanyag/{id}', [alapanyagController::class, 'update']);
Route::get('/alapanyag/{alapanyag}', [alapanyagController::class, 'show']);
Route::delete('/alapanyag/{id}', [alapanyagController::class, 'delete']);
Route::post('/alapanyag', [alapanyagController::class, 'store']);

Route::get('/osszetevo', [osszetevoController::class, 'index']);
Route::put('/osszetevo/{id}', [osszetevoController::class, 'update']);
Route::get('/osszetevo/{osszetevo}', [osszetevoController::class, 'show']);
Route::delete('/osszetevo/{id}', [osszetevoController::class, 'delete']);
Route::post('/osszetevo', [osszetevoController::class, 'store']);

Route::get('/kedvezmeny', [kedvezmenyController::class, 'index']);
Route::put('/kedvezmeny/{id}', [kedvezmenyController::class, 'update']);
Route::get('/kedvezmeny/{kedvezmeny}', [kedvezmenyController::class, 'show']);
Route::delete('/kedvezmeny/{id}', [kedvezmenyController::class, 'delete']);
Route::post('/kedvezmeny', [kedvezmenyController::class, 'store']);

Route::get('/nyugtatetel', [nyugtatetelController::class, 'index']);
Route::put('/nyugtatetel/{id}', [nyugtatetelController::class, 'update']);
Route::get('/nyugtatetel/{nyugtatetel}', [nyugtatetelController::class, 'show']);
Route::delete('/nyugtatetel/{id}', [nyugtatetelController::class, 'delete']);
Route::post('/nyugtatetel', [nyugtatetelController::class, 'store']);

Route::get('/nyugta', [nyugtaController::class, 'index']);
Route::put('/nyugta/{id}', [nyugtaController::class, 'update']);
Route::get('/nyugta/{nyugta}', [nyugtaController::class, 'show']);
Route::delete('/nyugta/{id}', [nyugtaController::class, 'delete']);
Route::post('/nyugta', [nyugtaController::class, 'store']);

Route::get('/reklamacio', [reklamacioController::class, 'index']);
Route::put('/reklamacio/{id}', [reklamacioController::class, 'update']);
Route::get('/reklamacio/{reklamacio}', [reklamacioController::class, 'show']);
Route::delete('/reklamacio/{id}', [reklamacioController::class, 'delete']);
Route::post('/reklamacio', [reklamacioController::class, 'store']);

Route::get('/menuosszeall', [menuosszeallController::class, 'index']);
Route::put('/menuosszeall/{id}', [menuosszeallController::class, 'update']);
Route::get('/menuosszeall/{menuosszeall}', [menuosszeallController::class, 'show']);
Route::delete('/menuosszeall/{id}', [menuosszeallController::class, 'delete']);
Route::post('/menuosszeall', [menuosszeallController::class, 'store']);

Route::get('/munkakor', [munkakorController::class, 'index']);
Route::put('/munkakor/{id}', [munkakorController::class, 'update']);
Route::get('/munkakor/{munkakor}', [munkakorController::class, 'show']);
Route::delete('/munkakor/{id}', [munkakorController::class, 'delete']);
Route::post('/munkakor', [munkakorController::class, 'store']);

Route::get('/dolgozo', [dolgozoController::class, 'index']);
Route::put('/dolgozo/{id}', [dolgozoController::class, 'update']);
Route::get('/dolgozo/{dolgozo}', [dolgozoController::class, 'show']);
Route::delete('/dolgozo/{id}', [dolgozoController::class, 'delete']);
Route::post('/dolgozo', [dolgozoController::class, 'store']);
