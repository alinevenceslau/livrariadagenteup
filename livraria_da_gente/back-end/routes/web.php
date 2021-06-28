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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adicionarLivro', [App\Http\Controllers\LivroController::class, 'create'])->name('criar');
Route::post('/adicionarLivro', [App\Http\Controllers\LivroController::class, 'store'])->name('guardar');
Route::get('/verLivros/{id}', [App\Http\Controllers\LivroController::class, 'show'])->name('ver');
Route::get('/editarLivros/{id}', [App\Http\Controllers\LivroController::class, 'edit'])->name('editar');
Route::get('/editarLivros/{id}', [App\Http\Controllers\LivroController::class, 'update'])->name('alterar');
