<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllProfilesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', [AllProfilesController::class, 'getAllProfiles']);

Route::get('/profiles/{id}', [AllProfilesController::class, 'getProfile']);