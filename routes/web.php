<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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
Route::get('/ListBarang106', [DashboardController::class, 'listbarang106']);
Route::get('/ListBarang097', [DashboardController::class, 'listbarang097']);
Route::get('/ListBarang119', [DashboardController::class, 'listbarang119']);
Route::get('/ListBarang096', [DashboardController::class, 'listbarang096']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);