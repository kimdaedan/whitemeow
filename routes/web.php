<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\meowcontroller;
use App\Http\Controllers\ListbarangController;
use App\Http\Controllers\WhiteController;

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

//Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//    return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);