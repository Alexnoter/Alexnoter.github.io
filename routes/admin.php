<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\categoriaController;



Route::get('', [HomeController::class, 'index']);

Route::resource('categorias', categoriaController::class)->names('admin.categorias');