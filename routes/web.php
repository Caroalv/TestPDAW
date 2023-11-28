<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;
use App\Http\Controllers\GraficasController;


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

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');

//Route::resource('tasks',TaskController::class);
Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::get('tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');
Route::put('tasks/edit', [TaskController::class, 'update'])->name('tasks.update');

Route::get('/graficas', [GraficasController::class, 'showGraph'])->name('graficas');


