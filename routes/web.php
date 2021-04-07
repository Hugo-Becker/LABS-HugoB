<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackArticleController;
use App\Http\Controllers\BackCategoryController;
use App\Http\Controllers\BackContactController;
use App\Http\Controllers\BackServicesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TagCategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\TitleController;
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

Route::get('/', [HomeController::class, 'index']);




Route::resource('homes', HomeController::class);
Route::resource('services', ServiceController::class);
Route::resource('blogs',BlogController::class);
Route::resource('contacts', ContactPageController::class);




Route::resource('articles', ArticleController::class);
Route::resource('categories', CategoryController::class);
Route::resource('tags', TagController::class);








Route::post('/search',[SearchController::class,'search']);






Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');



// BACK
Route::resource('abouts', AboutController::class);
Route::resource('backservices', BackServicesController::class);
Route::resource('testimonials', TestimonialsController::class);
Route::resource('titles', TitleController::class);
Route::resource('features', FeatureController::class);
Route::resource('cards', CardController::class);
Route::resource('tagsCats', TagCategoryController::class);
Route::resource('backCat', BackCategoryController::class);
Route::resource('backArticles', BackArticleController::class);
Route::resource('backContacts', BackContactController::class);
Route::resource('intros', IntroController::class);
Route::resource('logos', LogoController::class);
Route::resource('carousels', CarouselController::class);