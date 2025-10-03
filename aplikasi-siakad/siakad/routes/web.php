<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::resource("siswa",SiswaController::class);
