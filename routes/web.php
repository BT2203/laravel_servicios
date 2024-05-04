<?php

use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('productos', ProductController::class)->except([
    'show', 'edit', 'update', 'destroy'
])->names('productos');

Route::resource('marcas', MarcaController::class)->except([
    'show', 'edit', 'update', 'destroy'
])->names('marcas');