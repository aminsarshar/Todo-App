<?php

use App\Livewire\Admin\Users\Edit;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\UsersConroller;



// AdminPanel Routes
Route::get('/admin-panel/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');


Route::prefix('admin-panel/management')->name('admin.')->group(function () {
    Route::get('users/create', function () {
        return view('admin.users.create');
    })->name('user.create');

    Route::get('users', function () {
        return view('admin.users.index');
    })->name('user.index');

    // Route::get('users/{user}/edit', function () {
    //     return view('admin.users.edit');
    // })->name('user.edit');


    Route::get('users/{user}/edit', [UsersConroller::class, 'edit'])->name('user.edit');
    Route::put('users/{user}/update', [UsersConroller::class, 'update'])->name('user.update');
Route::delete('/users/{user}', [UsersConroller::class, 'destroy'])->name('user.destroy');

});



// Categories Routes
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

// Todos Routes
Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todos/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todos', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todo.show');
Route::get('/todos/{todo}/completed', [TodoController::class, 'completed'])->name('todo.completed');
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');

Route::get('/mock', function () {
    return response('OK', 200);
});


// Auth Routes

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::get('login', function () {
    return view('auth.login');
})->name('login');

// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');

// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
