<?php

<<<<<<< HEAD
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
=======
>>>>>>> 717496a83495207cc118502770cdc7a8082bb518
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\LandingPageController;

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

});

Route::post('/connexion/store',   [ConnectionController::class, 'store']);


Route::get('/landing', [LandingPageController::class, 'landing'])->name('landing');

Route::get('/accueil', [AccueilController::class, 'accueil'])->name('accueil');

// Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
