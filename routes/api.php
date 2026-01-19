<?php

use App\Http\Controllers\API\CicloController;
use App\Http\Controllers\API\FamiliaProfesionalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psr\Http\Message\ServerRequestInterface;
use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config\Config;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


// Rutas /api/vi1
Route::prefix('v1')->group(function () {

    Route::apiResource('ciclos', CicloController::class);

    Route::apiResource('familias_profesionales', FamiliaProfesionalController::class)->parameters([
   'familias_profesionales' => 'familiaProfesional'
]);
});
