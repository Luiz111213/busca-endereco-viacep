<?php

use App\Http\Controllers\MsContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecosController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/index.html',  [Mscontroller::class, 'index.html'])->name('index.html');




Route::post('/enderecos/salvar', [EnderecosController::class, 'store'])->name('enderecos.store');