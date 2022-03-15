<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvController;
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


Route::get('/',[AvController::class, "welcome"]);

Route::get('/Announcement/Create',[AvController::class, "Create"])->middleware('auth');

Route::get('/Announcement/{id}',[AvController::class, "show"])->middleware('auth');

Route::post('/Announcement',[AvController::class,"store"])->middleware('auth');

Route::get('/coment',[AvController::class,"coment"])->middleware('auth');

route::delete('/Announcement/{id}', [AvController::class,"destroy"])->middleware('auth');

route::get('/Announcement/edit/{id}', [AvController::class,"edit"])->middleware('auth');

route::PUT('/Announcement/update/{id}', [AvController::class,"update"])->middleware('auth');

Route::get('/financing/{id}',[AvController::class, "financing"])->middleware('auth');

Route::get('/done/{id}',[AvController::class, "done"])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
