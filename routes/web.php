<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\NoteController;

Route::get('/', [NoteController::class, 'index']);
Route::resource('notes', NoteController::class);
