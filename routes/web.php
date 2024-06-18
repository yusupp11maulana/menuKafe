<?php

use App\Http\Controllers\KategoriMenuController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return "Hello World";
//     return view('welcome');
// });
Route::get('/', [KategoriMenuController::class, 'index']);
