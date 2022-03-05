<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::post('/login', [CustomAuthController::class, 'login'] );
Route::post('/registration-user', [CustomAuthController::class, 'registerUser'] )
->name('registration-user');

Route::get('bejelentkezes', function () {
    return view('pages.bejelentkezes');
});

 Route::get('regisztracio', function () {
     return view('pages.regisztracio');
 });

Route::get('index', function () {
    return view('pages.index');
});

Route::get('dolgozo', function () {
    return view('pages.dolgozo');
});

Route::get('reklamacio', function () {
    return view('pages.reklamacio');
});

Route::get('termek', function () {
    return view('pages.termek');
});

Route::get('rendelesek', function () {
    return view('pages.rendelesek');
});

Route::get('atadottrendelesek', function () {
    return view('pages.atadottrendelesek');
});    

Route::get('kedvezmeny', function () {
    return view('pages.kedvezmeny');
});    

Route::get('konyha', function () {
    return view('pages.konyha');
});  


Route::get('profil', function () {
    return view('pages.profil');
});  