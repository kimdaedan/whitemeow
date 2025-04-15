<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\meowcontroller;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\WhiteController;
use App\Http\Controllers\terdekatController;
use App\Http\Controllers\loginFormController;


Route::get('/welcome', function () {
    return view('welcome');
 });

 Route::get('/user/{id}', function ($id) {
    return 'User dengan ID' . $id;
 });

 Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin User';
    });
});

Route::get('/', [meowcontroller::class, 'index']);
Route::get('/contact', [meowcontroller::class, 'contact']);

Route::get('/list_barang/{id}/{nama}', function($id, $nama){
    return view('list_barang', compact('id', 'nama'));
});

Route::get('/list_barang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get('/White_view', [WhiteController::class, 'tampilkan']);

// untuk terdekat
Route::get('/terdekat_view', function () {
    return view('terdekat_view');
    });

    // untuk terdekat
Route::get('/terdekat_view', [terdekatController::class, 'index']);

Route::get('/event_view', function () {
    return view('event_view');
    });

    // untuk loginform
    Route::get('/loginform', function () {
        return view('loginform');
        });

// untuk loginform
Route::get('/loginform', [loginFormController::class, 'index']);