<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogsController;
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

Route::get('/', function () { //Con esta funcion declaro que mi index es la plantilla que quiera
    return view('index');
});
Auth::routes();

Route::view('/', 'pages.blog');
Route::view('/admin', 'pages.admin');
Route::view('/categories', 'pages.categories');
Route::view('/articles', 'pages.articles');
Route::view('/opinions', 'pages.opinions');
Route::view('/banner', 'pages.banner');
Route::view('/ads', 'pages.ads');

Route::get('/', [BlogsController::class, 'getBlog']); //Route::get('PagPrincipal', [NombController::class, 'getMetod'])
// esto dice que ejecute el metodo getBlog que esta en BlogsController
Route::get('/admin', [AdminController::class, 'getAdmin']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
