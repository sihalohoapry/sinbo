<?php

use App\Http\Controllers\Admin\SparepartController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('sparepart', SparepartController::class)->middleware(['auth']);
Route::get('/hitory-transaction', [SparepartController::class, 'listTransaction'])->name('history-transaksi');
Route::get('/create-transaction', [SparepartController::class, 'createTransaction'])->name('create-transaction');
Route::get('/detail-transaction/{id}', [SparepartController::class, 'detailTransaction'])->name('detail-transaction');
Route::post('/transaction-sparepart', [SparepartController::class, 'saveTransaction'])->name('transaction-sparepart');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/active/{id}', [UserController::class, 'activeStatus'])->name('active');
Route::post('/non-active/{id}', [UserController::class, 'nonActiveStatus'])->name('non-active');
Route::post('/reset-password/{id}', [UserController::class, 'resetPassword'])->name('reset-password');
