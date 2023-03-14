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
Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');
Route::get('/create', [BbsController::class, 'create'])->name('create');


Route::get('/test', [BbsController::class, 'test']);

/* Route::get('/action', [BbsController::class, 'action'])->name('action'); */
