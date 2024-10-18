<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CancionController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Cancion;

Route::get('/', function () {
    // Obtener todas las materias de la base de datos
    $canciones = Cancion::all();
    // Retornar la vista welcome con los datos de las materias
    return view('inicio.index', compact('canciones'));
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('canciones', CancionController::class);
