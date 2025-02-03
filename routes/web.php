<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitizenController;
use Illuminate\Support\Facades\Auth;

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
    Route::get('/logout' , [CitizenController::class, 'logout'])->name('logout');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// admin

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'role:admin']);


Route::get('/riyadh', function () {
    return view('admin.dashboard-riyadh');
})->middleware(['auth', 'role:riyadh']);

Route::get('/jeddah', function () {
    return view('jeddah.dashboard');
})->middleware(['auth', 'role:jeddah']);

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
