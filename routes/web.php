<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Livewire\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/tutorial', function () {
//     return view('tutorial');
// });

Route::get('/users', function () {
    return view('users.index');
})->name('users.home');

Route::get('/user/{id}', [UserController::class, 'show'])->name('users.details');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::get('article/{name}', Article::class)->name('article');

Route::get('/tutorial', function () {
    return view('tutorial');
});




Route::get('/products', function () {
    return view('products');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('articles', ArticleController::class)->name('articles');
