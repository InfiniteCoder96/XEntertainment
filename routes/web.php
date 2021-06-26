<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\EventController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'show_home'])->name('show_home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// equipments routes
Route::resource('equipments', EquipmentController::class, ['only'=> ['index','create','store', 'update', 'edit', 'destroy']]);
Route::resource('events', EventController::class, ['only'=> ['index','create','store', 'update', 'edit', 'destroy']]);
