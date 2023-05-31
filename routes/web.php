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
use App\Http\Controllers\CniScreenController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\fatherController;
use App\Http\Controllers\motherController;

use App\Http\Controllers\JobController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\listeEnroleController;
use App\Http\Controllers\PereController;
use App\Http\Controllers\MereController;


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
Route::get('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/register.store', [RegisterController::class, 'store'])->name('register.store');






Route::get('/accueil', [AccueilController::class, 'accueil'])->name('accueil');

// Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/pere.store', [PereController::class, 'store'])->name('pere.store');
Route::post('/mere.store', [MereController::class, 'store'])->name('mere.store');


Route::get('/country', [CountryController::class, 'country'])->name('country');

Route::get('/job', [JobController::class, 'job'])->name('job');

Route::get('/pere', [fatherController::class, 'father'])->name('father');

Route::get('mere', [motherController::class, 'mother'])->name('mother');

Route::get('liste', [listeEnroleController::class, 'liste'])->name('liste');

Route::get('cni', [CniScreenController::class, 'cni'])->name('cni');
