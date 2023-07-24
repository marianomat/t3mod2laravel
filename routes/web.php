<?php

use App\Http\Controllers\TareaController;
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

Route::get('/tareas', [TareaController::class, "index"])->name("tareas.index");
Route::get("/tareas/create", [TareaController::class, "create"])->name("tareas.create");
Route::post("/tareas", [TareaController::class, "store"])->name("tareas.store");
