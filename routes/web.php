<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user');
});
Route::get('/create-user',[UserController::class , 'store']);
