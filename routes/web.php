<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TreinadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//pokemon
Route::get('pokemon', [PokemonController::class, 'index']);
Route::get('pokemon/create', [PokemonController::class, 'create']);
Route::post('pokemon', [PokemonController::class, 'store']);
Route::get('pokemon/{id}/edit', [PokemonController::class, 'edit']);
Route::put('pokemon/{id}', [PokemonController::class, 'update']);
Route::delete('pokemon/{id}', [PokemonController::class, 'destroy']);

//treinador
Route::get('treinador', [TreinadorController::class, 'index']);
Route::get('treinador/create', [TreinadorController::class, 'create']);
Route::post('treinador', [TreinadorController::class, 'store']);
Route::get('treinador/{id}/edit', [TreinadorController::class, 'edit']);
Route::put('treinador/{id}', [TreinadorController::class, 'update']);
Route::delete('treinador/{id}', [TreinadorController::class, 'destroy']);