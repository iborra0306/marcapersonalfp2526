<?php

use App\Http\Controllers\FamiliasProfesionalesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyectosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getHome']);

// ----------------------------------------
Route::get('login', function () {
    return view('auth.login');
});
Route::get('logout', function () {
    return "Logout usuario";
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'getHome'])
    ->name('home');

// ----------------------------------------
Route::prefix('proyectos')->group(function () {
    Route::get('/', [ProyectosController::class, 'getIndex']);

    Route::get('show/{id}', [ProyectosController::class, 'getShow'])->where('id', '[0-9]+');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('create', [ProyectosController::class, 'getCreate']);
        Route::post('store', [ProyectosController::class, 'store']);
        Route::get('edit/{id}', [ProyectosController::class, 'getEdit'])
            ->where('id', '[0-9]+');
        Route::put('update/{id}', [ProyectosController::class, 'update'])
            ->where('id', '[0-9]+');
    });
});

require __DIR__.'/auth.php';
