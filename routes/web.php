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
    return view('auth.login');
});
//Route::get('/empleados','App\Http\Controllers\EmpleadosController@index');
//Route::get('/empleados/create','App\Http\Controllers\EmpleadosController@create');

Route::resource('empleados', 'App\Http\Controllers\EmpleadosController')->middleware('auth');
Route::resource('clientes', 'App\Http\Controllers\ClientesController')->middleware('auth');
Route::resource('trabajos', 'App\Http\Controllers\TrabajosController')->middleware('auth');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

