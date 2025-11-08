<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorksController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/works', [WorksController::class, 'index'])->name('works.index');
Route::get('/works/create', [WorksController::class, 'create'])->name('works.create');
Route::post('/works', [WorksController::class, 'store'])->name('works.store');
Route::get('/works/{id}/edit', [WorksController::class, 'edit'])->name('works.edit');
Route::put('/works/{id}', [WorksController::class, 'update'])->name('works.update');
Route::delete('/works/{id}', [WorksController::class, 'destroy'])->name('works.destroy');
Route::get('/works/{id}', [WorksController::class, 'show'])->name('works.show');