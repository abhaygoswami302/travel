<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('services', ServiceController::class);

Route::get('/services/{service_slug}/{component_slug}', [CategoriesController::class, 'index'])->name('categories.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
