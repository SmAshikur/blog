<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\COntactCOntroller;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/blog',[BlogController::class,'index'])->name('blog');;
Route::get('/about',[AboutController::class,'about'])->name('about');;
Route::get('/contact',[COntactCOntroller::class,'contact'])->name('contact');
Route::get('/post/{post:slug}',[BlogController::class,'post'])->name('post');
Auth::routes();
Route::get('/postCreate',[BlogController::class,'postCreate'])->name('postCreate');
Route::post('/postStore',[BlogController::class,'postStore'])->name('postStore');
Route::get('/postEdit/{post}/edit',[BlogController::class,'postEdit'])->name('postEdit');
Route::get('/postDelete/{post}',[BlogController::class,'postDelete'])->name('postDelete');
Route::post('/postUpdate/{post}',[BlogController::class,'postUpdate'])->name('postUpdate');
Route::get('/categoryCreate',[BlogController::class,'categoryCreate'])->name('categoryCreate');
Route::get('/categoryView',[BlogController::class,'categoryView'])->name('categoryView');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
