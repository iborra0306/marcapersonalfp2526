<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola', function()
{
    return '¡Hola mundo!';
});

Route::any('foo/bar', function()
{
    return '¡Hola mundo!';
});

// Funcion de prueba para saludar (con restriccion de solo letras y con el ? hacemos que sea opcional)
Route::get('saluda/{nombre?}', function($nombre = 'paloma')
{
    return '¡Hola ' . $nombre . '!';
}) ->where('nombre', '[A-Za-z]+');

// Función para sumar dos números (con restriccion de solo números)
Route::get('/suma/{num1}/{num2}', function($num1, $num2)
{
    $suma = $num1 + $num2;
    return "La suma de $num1 y $num2 es =  $suma";
})
->where(array('num1' => '[0-9]+', 'num2' => '[0-9]+'));
