<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Models\Servicio;
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
