<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\FacultadController;


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

Auth::routes();

Route::resource('persona', PersonaController::class);
Route::resource('certificado', CertificadoController::class);
Route::resource('facultad', FacultadController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
