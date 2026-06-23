<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\WhatsappController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/singlecar/{id}', [HomeController::class, 'singleproduct']);
Route::get('/products', [ProductController::class, 'products']);
Route::get('/blogs', [BlogController::class, 'blogs']);
Route::get('/blogs/singleblog/{id}', [BlogController::class, 'singleblog']);
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/contact-us', [HomeController::class, 'contact']);
Route::post('/message', [MessageController::class, 'message']);
Route::post('/message2', [MessageController::class, 'message2']);
Route::post('/search',[HomeController::class, 'search']);
Route::post('/products/filter', [ProductController::class,'filter']);
Route::get('/types/{id}', [ProductController::class,'filterbytype']);
Route::get('/blogs/search', [BlogController::class, 'search']);
Route::get('/blogs/filter/{id}', [BlogController::class, 'filterbycat']);
Route::get('/blogs/tags/{id}', [BlogController::class, 'filterbytag']);
