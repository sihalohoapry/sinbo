<?php

use App\Http\Controllers\Admin\ManageBookingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SparepartController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Customer\BookingCustomerController;
use App\Http\Controllers\Customer\SparepartController as CustomerSparepartController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CustomerSparepartController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin/superadmin
Route::resource('sparepart', SparepartController::class)->middleware(['auth']);
Route::get('/hitory-transaction', [SparepartController::class, 'listTransaction'])->name('history-transaksi');
Route::get('/create-transaction', [SparepartController::class, 'createTransaction'])->name('create-transaction');
Route::get('/detail-transaction/{id}', [SparepartController::class, 'detailTransaction'])->name('detail-transaction');
Route::get('/download-detail-transaction/{id}', [SparepartController::class, 'downloadTransaction'])->name('download-detail-transaction');
Route::post('/transaction-sparepart', [SparepartController::class, 'saveTransaction'])->name('transaction-sparepart');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/active/{id}', [UserController::class, 'activeStatus'])->name('active');
Route::post('/non-active/{id}', [UserController::class, 'nonActiveStatus'])->name('non-active');
Route::post('/reset-password/{id}', [UserController::class, 'resetPassword'])->name('reset-password');
Route::post('change-role-to-admin/{id}', [UserController::class, 'setAdmin'])->name('change-role-to-admin');
Route::get('/list-pengajuan-customer', [ManageBookingController::class, 'index'])->name('list-pengajuan-customer');
Route::post('/accept-pengajuan-customer/{id}', [ManageBookingController::class, 'acceptPengajuan'])->name('accept-pengajuan-customer');
Route::post('/reject-pengajuan-customer/{id}', [ManageBookingController::class, 'rejectPengajuan'])->name('reject-pengajuan-customer');
Route::get('/detail-pengajuan-customer/{id}', [ManageBookingController::class, 'detailPengajuan'])->name('detail-pengajuan-customer');
Route::get('/list-service-customer', [ServiceController::class, 'listService'])->name('list-service-customer');
Route::get('/service-customer/{id}', [ServiceController::class, 'serviceCustomer'])->name('service-customer');
Route::get('/list-history-service', [ServiceController::class, 'listHistoryService'])->name('list-history-service');
Route::get('/detail-service/{id}', [ServiceController::class, 'detailService'])->name('detail-service');
Route::get('/cetak-service/{id}', [ServiceController::class, 'cetakService'])->name('cetak-service');
Route::post('/transaction-service/{id}', [ServiceController::class, 'transactionService'])->name('transaction-service');


//admin/superadmin/customer
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/edit-profile/{id}', [UserController::class, 'editProfile'])->name('edit-profile');

//user
Route::get('/jadwal-service', [BookingCustomerController::class, 'jadwalService'])->name('jadwal-service');
Route::get('/all-sparepart', [CustomerSparepartController::class, 'allSparepart'])->name('all-sparepart');
Route::get('/detail-sparepart/{id}', [CustomerSparepartController::class, 'detailSparepart'])->name('detail-sparepart');
Route::get('/create-pengajuan-booking', [BookingCustomerController::class, 'createPengajuanBooking'])->name('create-pengajuan-booking');
Route::get('/list-pengajuan', [BookingCustomerController::class, 'listPengajuan'])->name('list-pengajuan');
Route::post('/pengajuan-booking', [BookingCustomerController::class, 'pengajuanBooking'])->name('pengajuan-booking');
Route::delete('/delete-booking/{id}', [BookingCustomerController::class, 'deleteBooking'])->name('delete-booking');