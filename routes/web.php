<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;

Route::get('/', [TodoController::class , 'index'])->name('todo.index');


// Categories Route
Route::get('/categories', [CategoryController::class , 'index'])->name('category.index');
Route::get('/categories/create', [CategoryController::class , 'create'])->name('category.create');
Route::post('/categories', [CategoryController::class , 'store'])->name('category.store');
Route::get('/categories/{category}/edit', [CategoryController::class , 'edit'])->name('category.edit');
Route::put('/categories/{category}', [CategoryController::class , 'update'])->name('category.update');
Route::delete('/categories/{category}', [CategoryController::class , 'destroy'])->name('category.destroy');

// Todos Route
Route::get('/todos/create', [TodoController::class , 'create'])->name('todo.create');
Route::post('/todos', [TodoController::class , 'store'])->name('todo.store');
