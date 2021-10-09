<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[App\Http\Controllers\InventarioController::class, 'index']);

Route::resource('calzado','App\Http\Controllers\CalzadoController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::resource('inicio', 'App\Http\Controllers\InicioController');
Route::resource('vista', 'App\Http\Controllers\VistaController');
Route::resource('vendedor', 'App\Http\Controllers\VendedorController');
Route::resource('perfil', 'App\Http\Controllers\UserController');
Route::resource('admin', 'App\Http\Controllers\AdminViewController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
