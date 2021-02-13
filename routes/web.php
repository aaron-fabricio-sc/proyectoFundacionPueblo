<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
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

Route::get('/', HomeController::class);
Route::get('menu', MenuController::class);

Route::get('cursos/cocina', [CursoController::class, 'cocina'])->name('curso.cocina');
Route::get('cursos/textiles', [CursoController::class, 'textiles'])->name('curso.textiles');
Route::get('cursos/servicios', [CursoController::class, 'servicios'])->name('curso.servicios');
/*Route::get('cursos', [CursoController::class, 'index'])->name('curso.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('curso.create');
Route::post('cursos', [CursoController::class, 'store'])->name('curso.store');


Route::get('cursos/{id}', [CursoController::class, 'show'])->name('curso.show');
Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('curso.edit');
Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('curso.update'); */
Route::resource('cursos', CursoController::class)->names('curso');
Route::put('cursos/{curso}', [CursoController::class, 'delete'])->name('curso.delete');
