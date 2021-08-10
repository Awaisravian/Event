<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [App\Http\Controllers\WeddingController::class, 'index'])->name('landing');
Route::get('/gallery', [App\Http\Controllers\WeddingController::class, 'showGallery'])->name('Gallery');
Route::get('/services', [App\Http\Controllers\WeddingController::class, 'showServices'])->name('Services');
Route::get('/about', [App\Http\Controllers\WeddingController::class, 'About'])->name('aboutUs');
Route::get('/contacts', [App\Http\Controllers\WeddingController::class, 'Contact'])->name('ContactUs');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


