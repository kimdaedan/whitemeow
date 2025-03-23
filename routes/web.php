<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\meowcontroller;

// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/', [meowcontroller::class, 'index']);
Route::get('/contact', [meowcontroller::class, 'contact']);
