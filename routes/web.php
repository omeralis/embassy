<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitizenController;

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
    return view('front/landingpage');
});

 
Route::get('/register', function () {
    return view('front/register');
});

Route::get('/login', function () {
    return view('front/login');
});

Route::post('/register', [CitizenController::class, 'register']);
Route::post('/login', [CitizenController::class, 'login']);