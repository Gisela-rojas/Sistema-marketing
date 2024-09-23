<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CampaniaController;
use App\Http\Controllers\InteraccionController;
 //...........\..\moden\nombre del modelo

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

Route::get('/index', [ClientController::class, 'index']);

Route::resource('clientes', ClientController::class);
Route::resource('campanias', CampaniaController::class);
Route::resource('interacciones', InteraccionController::class);
// Agrega más rutas según sea necesario


Route::get('/login', function () {
    return view('login');
})->name('login');

