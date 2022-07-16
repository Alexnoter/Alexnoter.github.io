<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\categoriaController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\UserController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('users', UserController::class)->names('admin.users');

/* con esto creamos las 7 rutas necesarias para  un crud */
Route::resource('categorias', categoriaController::class)->names('admin.categorias');

Route::resource('productos', ProductoController::class)->names('admin.productos');