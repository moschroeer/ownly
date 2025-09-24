<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\WelcomeController::class,'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('items/create', [\App\Http\Controllers\ItemController::class, 'create'] )->name('items.create');
    Route::post('items', [\App\Http\Controllers\ItemController::class, 'store'] )->name('items.store');
    Route::get('items/{id}/edit', [\App\Http\Controllers\ItemController::class, 'edit'] )->name('items.edit');
    Route::put('items/{id}', [\App\Http\Controllers\ItemController::class, 'update'] )->name('items.update');
    Route::delete('items/{id}', [\App\Http\Controllers\ItemController::class, 'destroy'] )->name('items.destroy');
});

Route::get('items', [\App\Http\Controllers\ItemController::class, 'index'] )->name('items.index');
Route::get('items/{id}', [\App\Http\Controllers\ItemController::class, 'show'] )->name('items.show');


Route::get('reservations', [\App\Http\Controllers\ReservationController::class, 'index'] );
Route::get('reservations/{id}', [\App\Http\Controllers\ReservationController::class, 'show'] );

Route::get('users', [\App\Http\Controllers\UserController::class, 'index'] );
Route::get('users/{id}', [\App\Http\Controllers\UserController::class, 'show'] );

require __DIR__.'/auth.php';
