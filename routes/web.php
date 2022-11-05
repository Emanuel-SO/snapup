<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index']);
Route::view('admin', 'admin.index');
Route::view('productos', 'productos');
Route::view('producto', 'producto');
Route::view('carrito', 'carrito');
Route::view('registro', 'registro');
Route::view('login', 'login');
Route::get('perfil', [App\Http\Controllers\RoleController::class, 'index']);

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::get('guardar-rol', [App\Http\Controllers\RoleController::class, 'save']);
    Route::get('actualizar-rol/{id}', [App\Http\Controllers\RoleController::class, 'update']);
    Route::get('eliminar-rol/{id}', [App\Http\Controllers\RoleController::class, 'delete']);
    Route::get('groups', [App\Http\Controllers\GroupController::class, 'index']);
    Route::get('guardar-groups', [App\Http\Controllers\GroupController::class, 'save']);
    Route::get('actualizar-groups/{id}', [App\Http\Controllers\GroupController::class, 'update']);
    Route::get('eliminar-groups/{id}', [App\Http\Controllers\GroupController::class, 'delete']);
});
