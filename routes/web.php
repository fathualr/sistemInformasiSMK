<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListBarangController099;
use App\Http\Controllers\ListBarangController106;
use App\Http\Controllers\ListBarangController119;
use App\Http\Controllers\ListBarangController096;
use App\Http\Controllers\TentangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID '.$id;
});

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', function(){
        return 'Admin Dashboard';
    });
    
    Route::get('/users', function(){
        return 'Admin Users';
    });
});

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//     return view ('list_barang', compact('id', 'nama'));
// });

Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/ListBarangView106', [ListBarangController106::class, 'tampilkan']);
Route::get('/ListBarangView099', [ListBarangController099::class, 'tampilkan']);
Route::get('/ListBarangView119', [ListBarangController119::class, 'tampilkan']);
Route::get('/ListBarangView096', [ListBarangController096::class, 'tampilkan']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/Tentang', [TentangController::class, 'tentang']);