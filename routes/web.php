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
    return view('welcome');
});


// Mostrar el formulario

Route::get('/solicitud', function () {
    return view('solicitud');
});


// Procesar el formulario
Route::post('/solicitud', function () {
    $message = request('solicitud');
    //
});

Route::get('/formulario', function () {
    return view('formulario');
});


// Procesar el formulario
Route::post('/formulario', function () {
    $message = request('formulario');
    //
});

Route::get('/prueba', function () {
    return view('prueba');
});


// Procesar el formulario
Route::post('/prueba', function () {
    $message = request('prueba');
    //
});


