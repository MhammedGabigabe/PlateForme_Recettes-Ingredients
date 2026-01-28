<?php

use App\Http\Controllers\InscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/login', function () {
    return view('login');
});

Route::post('/inscriptionController', [InscriptionController::class, 'inscription']);
