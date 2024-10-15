<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', [TaskController::class, 'show'])->name('task.show');
Route::get('/task/add', [TaskController::class, 'add'])->name('task.add');
Route::post('/task/submit', [TaskController::class, 'submit'])->name('task.submit');
Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/task/update/{id}', [TaskController::class, 'update'])->name('task.update');
Route::post('/task/finish/{id}', [TaskController::class, 'finish'])->name('task.finish');
