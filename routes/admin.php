<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\categoriaController;
use App\Http\Controllers\Admin\ProductoController;

Route::get('', [HomeController::class, 'index']);
/* con esto creamos las 7 rutas necesarias para  un crud */
Route::resource('categorias', categoriaController::class)->names('admin.categorias');

Route::resource('productos', ProductoController::class)->names('admin.productos');