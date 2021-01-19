<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReadyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\VideoController;
use App\Models\Newsletter;
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

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('redact');
Route::get('/profil', [ProfilController::class, 'index'])->name('profil')->middleware('redact');
Route::get('/liste-user', [ProfilController::class, 'index2'])->name('liste-user')->middleware('admin');
Route::get('/navbar', [LogoController::class, 'index'])->name('navbar')->middleware('webmas');
Route::get('/footer', [FooterController::class, 'index'])->name('footer')->middleware('webmas');
Route::get('/titre', [BackgroundController::class, 'index'])->name('titre')->middleware('webmas');
Route::get('/video', [VideoController::class, 'index'])->name('video')->middleware('webmas');
Route::get('/testimonial', [TestimonialsController::class, 'index'])->middleware('webmas');
Route::get('/service', [ServiceController::class, 'index'])->middleware('webmas');
Route::get('/contact', [ContactController::class, 'index'])->middleware('webmas');
Route::get('/ready', [ReadyController::class, 'index'])->middleware('webmas');
Route::get('/googleMaps', [ContactController::class, 'index2'])->name('googleMaps')->middleware('webmas');
Route::get('/mailBox', [EmailController::class, 'index'])->name('mailBox')->middleware('webmas');
Route::get('/newsletter', [NewsletterController::class, 'index'])->name('mailBox')->middleware('webmas');
Route::get('/categorie', [BlogController::class, 'index3'])->name('categorie')->middleware('webmas');
Route::get('/tag', [BlogController::class, 'index2'])->name('tag')->middleware('webmas');

Route::get('/liste-article', [BlogController::class, 'index4'])->name('liste-article')->middleware('redact');
Route::get('/article', [BlogController::class, 'index1'])->name('article')->middleware('redact');
Route::get('/article-edit/{id}', [BlogController::class, 'edit'])->middleware('redact');

Route::get('/edit-ser/{id}', [ServiceController::class, 'edit'])->middleware('webmas');

Route::post('/change-role/{id}', [ProfilController::class,'update'])->middleware('admin');
Route::post('/add-article', [ArticleController::class, 'store'])->middleware('redact');

Route::post('/add-tag', [TagController::class, 'store'])->middleware('webmas');
Route::post('/add-categorie', [CategorieController::class, 'store'])->middleware('webmas');
Route::post('/edit-article/{id}', [ArticleController::class, 'update'])->middleware('redact');
Route::post('/edit-check/{id}', [ArticleController::class, 'update2'])->middleware('webmas');
Route::post('/delete-article/{id}', [ArticleController::class, 'destroy'])->middleware('redact');
Route::post('/delete-newsletter/{id}', [Newsletter::class, 'destroy'])->middleware('webmas');
Route::post('/modif-navbar', [NavbarController::class, 'update'])->middleware('webmas');
Route::post('/modif-logo', [LogoController::class, 'update'])->middleware('webmas');
Route::post('/edit-video', [VideoController::class, 'update'])->middleware('webmas');
Route::post('/add-service', [ServiceController::class, 'store'])->middleware('webmas');
Route::post('/edit-service/{id}', [ServiceController::class, 'update'])->middleware('webmas');
Route::post('/delete-service/{id}', [ServiceController::class, 'destroy'])->middleware('webmas');
Route::post('/add-carou', [BackgroundController::class, 'store'])->middleware('webmas');
Route::post('/edit-titre/{id}', [BackgroundController::class, 'update'])->middleware('webmas');
Route::post('/logo-delete/{id}', [BackgroundController::class, 'destroy'])->middleware('webmas');
Route::post('/edit-contact', [ContactController::class, 'update'])->middleware('webmas');
Route::post('/edit-ready', [ReadyController::class, 'update'])->middleware('webmas');
Route::post('/edit-footer', [FooterController::class, 'update'])->middleware('webmas');

Route::post('/add-team', [TeamController::class, 'store'])->middleware('webmas');

Route::post('/add-testi', [TestimonialsController::class, 'store'])->middleware('justwebmas');
Route::post('/edit-testi/{id}', [TestimonialsController::class, 'update'])->middleware('justwebmas');
Route::post('/del-testi/{id}', [TestimonialsController::class, 'destroy'])->middleware('justwebmas');

// Publique


Route::post('/send-contact',[EmailController::class,'sendmail']);
Route::post('add-newsletter',[NewsletterController::class,'store']);

Route::get('/', [PublicController::class, 'index'])->name('Accueil');
Route::get('/Blog', [PublicController::class, 'index2'])->name('Blog');
Route::get('/post/{id}', [PublicController::class, 'show']);
Route::get('/Service', [PublicController::class, 'index3'])->name('Service');
Route::get('/Contact', [PublicController::class, 'index4'])->name('Contact');
Route::get('/search', [BlogController::class , 'search']);
Route::post('/add-comment', [CommentaireController::class, 'store']);



