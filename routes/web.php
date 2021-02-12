<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListController;

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
    return view('login.registro');
});

Route::get('login', [UserController::class, 'login'] )->name('login');
Route::get('registro', [UserController::class, 'registro'] );
Route::post('register', [UserController::class, 'register'] );
Route::post('authenticate', [UserController::class, 'authenticate'] );

Route::get('log-out', [UserController::class, 'logOut'] );

Route::group(['middleware' => ['auth']], function() {
    Route::get('mi-lista', [UserController::class,'miLista']);
    Route::get('list/nueva', [ListController::class,'nuevaTarea']);
    Route::post('list/nueva', [ListController::class,'storeTarea']);
    Route::post('list/update', [ListController::class,'actualizar']);
    Route::post('list/delete', [ListController::class,'eliminar']);
});