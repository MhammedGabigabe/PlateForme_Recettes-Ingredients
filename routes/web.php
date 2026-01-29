<?php

use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/', function () {
    return view('inscription');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/recettes', function () {
    return view('recettes');
});

Route::post('/inscriptionController', [InscriptionController::class, 'inscription']);
Route::post('/loginController', [LoginController::class, 'login']);
