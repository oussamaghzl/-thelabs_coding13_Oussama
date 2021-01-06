<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Administrateur


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


//Accueil

Route::get('/navbar', [LogoController::class, 'index'])->name('navbar');
Route::get('/titre', [BackgroundController::class, 'index'])->name('titre');

//function

Route::post('/modif-navbar', [NavbarController::class, 'update']);
Route::post('/modif-logo', [LogoController::class, 'update']);
Route::post('/edit-titre', [BackgroundController::class, 'update']);


// Publique

Route::get('/', [PublicController::class, 'index'])->name('Accueil');
Route::get('/Blog', [PublicController::class, 'index2'])->name('Blog');
Route::get('/Blog-post', [PublicController::class, 'index21'])->name('Blog-post');
Route::get('/Service', [PublicController::class, 'index3'])->name('Service');
Route::get('/Contact', [PublicController::class, 'index4'])->name('Contact');



// Administrateur


