<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CrudController::class, "index"])->name("example-app.index");

//ruta para añadir datos:
Route::post('/registrar-producto', [CrudController::class, "create"])->name("example-app.create");

Route::post('/modificar-producto', [CrudController::class, "update"])->name("example-app.update");

