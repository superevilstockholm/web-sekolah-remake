<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

// Auth
Route::post('login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {

});
