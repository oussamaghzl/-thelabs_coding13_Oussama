<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReadyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\VideoController;
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
Route::get('/navbar', [FooterController::class, 'index'])->name('footer');
Route::get('/titre', [BackgroundController::class, 'index'])->name('titre');
Route::get('/video', [VideoController::class, 'index'])->name('video');
Route::get('/testimonial', [TestimonialsController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/ready', [ReadyController::class, 'index']);

Route::get('/edit-ser/{id}', [ServiceController::class, 'edit']);

//function

Route::post('/modif-navbar', [NavbarController::class, 'update']);
Route::post('/modif-logo', [LogoController::class, 'update']);
Route::post('/edit-video', [VideoController::class, 'update']);

Route::post('/add-service', [ServiceController::class, 'store']);
Route::post('/edit-service/{id}', [ServiceController::class, 'update']);
Route::post('/delete-service/{id}', [ServiceController::class, 'destroy']);

Route::post('/add-carou', [BackgroundController::class, 'store']);
Route::post('/edit-titre/{id}', [BackgroundController::class, 'update']);
Route::post('/logo-delete/{id}', [BackgroundController::class, 'destroy']);

Route::post('/add-testi', [TestimonialsController::class, 'store']);
Route::post('/edit-testi/{id}', [TestimonialsController::class, 'update']);
Route::post('/del-testi/{id}', [TestimonialsController::class, 'destroy']);

Route::post('/add-team', [TeamController::class, 'store']);

Route::post('/edit-contact', [ContactController::class, 'update']);

Route::post('/edit-ready', [ReadyController::class, 'update']);



// Publique

Route::get('/', [PublicController::class, 'index'])->name('Accueil');
Route::get('/Blog', [PublicController::class, 'index2'])->name('Blog');
Route::get('/Blog-post', [PublicController::class, 'index21'])->name('Blog-post');
Route::get('/Service', [PublicController::class, 'index3'])->name('Service');
Route::get('/Contact', [PublicController::class, 'index4'])->name('Contact');



// Administrateur


