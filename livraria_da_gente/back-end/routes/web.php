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

//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Criar Livro
Route::get('/adicionarLivro', [App\Http\Controllers\LivroController::class, 'create'])->name('criar');
//Guardar Livro criado
Route::post('/guardarLivro', [App\Http\Controllers\LivroController::class, 'store'])->name('guardar');
//Mostrar os livros criados
Route::get('/verLivros', [App\Http\Controllers\LivroController::class, 'show'])->name('ver');
//Editar o livro selecionado com o (id)
Route::get('/editarLivros/{id}', [App\Http\Controllers\LivroController::class, 'edit'])->name('editar');
//Salvar alterações do livro
Route::get('/updateLivros/{id}', [App\Http\Controllers\LivroController::class, 'update'])->name('alterar');
//Deletar livro passado pelo id
Route::get('/deleteLivros/{id}', [App\Http\Controllers\LivroController::class, 'delete'])->name('delete');
