<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;

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
    return view('welcome');
});
Route::get('servicio',[ServicioController::class,'showservices'])->name('showservices');
Route::get('servicio/create',[ServicioController::class,'createservice'])->name('createservice');
Route::post('servicio',[ServicioController::class,'saveservice'])->name('saveservice');
Route::get('servicio/{servicio}',[ServicioController::class,'showservice'])->name('showservice');
Route::get('servicio/{servicio}/edit',[ServicioController::class,'editservice'])->name('editservice');
Route::put('servicio/{servicio}',[ServicioController::class,'updateservice'])->name('updateservice');
Route::delete('servicio/{servicio}',[ServicioController::class,'deleteservice'])->name('deleteservice');


Route::get('usuario',[UsuarioController::class,'showusers'])->name('showusers');
Route::get('usuario/create',[UsuarioController::class,'createuser'])->name('createuser');
Route::post('usuario',[UsuarioController::class,'newuser'])->name('saveuser');
Route::get('usuario/{usuario}',[UsuarioController::class,'showuser'])->name('showuser');
Route::get('usuario/{usuario}/edit',[UsuarioController::class,'edituser'])->name('edituser');
Route::put('usuario/{usuario}',[UsuarioController::class,'updateuser'])->name('updateuser');
Route::delete('usuario/{usuario}',[UsuarioController::class,'destroyuser'])->name('deleteuser');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
