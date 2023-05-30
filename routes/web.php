<?php

use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::controller(ConnectionController::class)->group(function () {
    Route::get('/login', 'index');
    Route::get('/users/{id}', 'show');
    Route::post('/connexion.store', 'store');
});


Route::get('/landing', [LandingPageController::class, 'landing'])->name('landing');

Route::get('/accueil', [AccueilController::class, 'accueil'])->name('accueil');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
