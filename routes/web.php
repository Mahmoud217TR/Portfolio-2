<?php

use App\Http\Controllers\PathController;
use App\Http\Controllers\MessageController;
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

Route::get('/',[PathController::class,'home'])->name('home');
Route::get('/about',[PathController::class,'about'])->name('about');
Route::get('/projects',[PathController::class,'projects'])->name('projects');
Route::get('/contact',[PathController::class,'contact'])->name('contact');

Route::post('/message',[MessageController::class,'store'])->name('send_message');
