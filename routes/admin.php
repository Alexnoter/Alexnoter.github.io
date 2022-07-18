<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\categoriaController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CompraController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\ProveedorController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VentaController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('users', UserController::class)->names('admin.users');

/* con esto creamos las 7 rutas necesarias para  un crud */
Route::resource('categorias', categoriaController::class)->names('admin.categorias');

Route::resource('clients', ClientController::class)->names('admin.clients');

Route::resource('productos', ProductoController::class)->names('admin.productos');

Route::resource('proveedores', ProveedorController::class)->names('admin.proveedores');

Route::resource('compras', CompraController::class)->names('admin.compras');

Route::resource('ventas', VentaController::class)->names('admin.ventas');