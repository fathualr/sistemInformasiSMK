<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/id', function ($id) {
    return 'User dengan ID';
});

Route::prefix('admin')->group(function () {
    route::get('/dashboard', function () {
    return 'Admin Dashboard';
    });

    route ::get('/user', function () {
        return 'Admin Users';
    });
});

// Route::get('/listbarang/{id}/{nama}', function ($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/Dashboard', [DashboardController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact',[HomeController::class, 'Contact']);