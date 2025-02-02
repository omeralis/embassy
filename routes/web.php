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

 
Route::get('/register', function () {  return view('citizen/register'); });
Route::get('/login', function () {  return view('citizen/login'); });

Route::post('/register', [CitizenController::class, 'register']);
Route::post('/login', [CitizenController::class, 'login']);

Route::middleware(['check_citizen'])->group(function () 
{
    Route::get('/dashboard', [CitizenController::class, 'home'])->name('dashboard');
    Route::get('/somePage' , [CitizenController::class, 'somePage'])->name('somePage');
});