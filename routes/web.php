<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/home/ceate', [App\Http\Controllers\HomeController::class, 'create'])->name('bb.create');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'store'])->name('bb.store');


/* Страница с веб формой для правки объявления */
Route::get('/home/{bb}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('bb.edit')->middleware('can:update,bb');
/* Сохраняем исправленное объявление */
Route::patch('/home/{bb}', [App\Http\Controllers\HomeController::class, 'update'])->name('bb.update')->middleware('can:update,bb');
/* Вывод страницы удаления объявления */
Route::get('/home/{bb}/delete', [App\Http\Controllers\HomeController::class, 'delete'])->name('bb.delete')->middleware('can:destroy,bb');
/* Удаляем объявление */
Route::delete('/home/{bb}/destroy', [App\Http\Controllers\HomeController::class, 'destroy'])->name('bb.destroy')->middleware('can:destroy,bb');
