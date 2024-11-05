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

use App\Http\Controllers\Task9Controller;

Route::get('/home', [Task9Controller::class, 'home'])->name('home');
Route::get('/section1', [Task9Controller::class, 'section1'])->name('section1');
Route::get('/section2', [Task9Controller::class, 'section2'])->name('section2');
// Añade más rutas según las secciones que tengas en la Actividad 11
