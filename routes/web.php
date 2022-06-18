<?php

use App\Http\Controllers\Admin\DestinasiController as ADestinasiController;
use App\Http\Controllers\Admin\HomeController as AHomeController;
use App\Http\Controllers\Admin\PaketController as APaketController;
use App\Http\Controllers\Admin\RoleController as ARoleController;
use App\Http\Controllers\Admin\TipeController as ATipeController;
use App\Http\Controllers\Admin\TransaksiController as ATransaksiController;
use App\Http\Controllers\Admin\UserController as AUserController;
use App\Http\Controllers\User\HomeController as UHomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UHomeController::class, 'index']);
Route::get('/paket/{id}/show', [UHomeController::class, 'show']);
Route::post('/checkout', [UHomeController::class, 'checkout']);
Route::get('/inv/{id}/status', [UHomeController::class, 'status']);

Auth::routes(['register' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'check'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::controller(AHomeController::class)->group(function(){
            Route::get('home', 'index');
            Route::get('ubah_profile', 'ubah_profile');
            Route::put('update_profile', 'update_profile');
            Route::get('ubah_password', 'ubah_password');
            Route::put('update_password', 'update_password');
        });

        Route::resource('user', AUserController::class);
        Route::resource('role', ARoleController::class);
        Route::resource('tipe', ATipeController::class);
        Route::resource('destinasi', ADestinasiController::class);
        Route::resource('paket', APaketController::class);

        Route::controller(ATransaksiController::class)->group(function(){
            Route::get('transaksi', 'index');
            Route::get('transaksi/{id}/show', 'show');
            Route::get('transaksi/{id}/bayar', 'bayar');
            Route::put('transaksi/{id}', 'update');
            Route::get('transaksi/export', 'export');
        });
    });
});
