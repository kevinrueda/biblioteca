<?php

use App\Http\Controllers\AutoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialeController;
use App\Http\Controllers\ParametroController;

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

Route::get('/dash', function () {
    return view('dash.index');
})->middleware(['auth'])->name('dash');

require __DIR__.'/auth.php';

Route::resource('/editoriales', EditorialeController::class);

Route::resource('/autores', AutoreController::class);

Route::resource('/parametros', ParametroController::class);

Route::get('/datatable/editoriales', [EditorialeController::class, 'editorial'])->name('datatable.editorial');