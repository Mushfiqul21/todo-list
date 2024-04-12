<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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


Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::get('/add', [TodoController::class, 'create'])->name('todo.add');
Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('todo.edit');
Route::get('/destroy/{id}', [TodoController::class, 'destroy'])->name('todo.delete');

Route::post('/create', [TodoController::class, 'store'])->name("todo.store");
Route::post('/update/{id}', [TodoController::class, 'update'])->name("todo.update");


