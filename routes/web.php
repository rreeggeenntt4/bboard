<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BbsController::class, 'index'])->name('index');
Route::get('/advertisement/{bb}', [BbsController::class, 'detail'])->name('detail');
Route::get('/url', [BbsController::class, 'url']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
