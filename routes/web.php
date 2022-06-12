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
Route::resource('/sparepart', SparepartController::class)->middleware(['auth','admin']);
Route::get('/hitory-transaction', [SparepartController::class, 'listTransaction'])->name('history-transaksi')->middleware(['auth','admin']);
Route::get('/create-transaction', [SparepartController::class, 'createTransaction'])->name('create-transaction')->middleware(['auth','admin']);
Route::get('/detail-transaction/{id}', [SparepartController::class, 'detailTransaction'])->name('detail-transaction')->middleware(['auth','admin']);
Route::get('/download-detail-transaction/{id}', [SparepartController::class, 'downloadTransaction'])->name('download-detail-transaction')->middleware(['auth','admin']);
Route::get('/download-transaction', [SparepartController::class, 'downloadAllTransaction'])->name('download-transaction')->middleware(['auth','admin']);
Route::post('/transaction-sparepart', [SparepartController::class, 'saveTransaction'])->name('transaction-sparepart')->middleware(['auth','admin']);
Route::get('/user', [UserController::class, 'index'])->name('user')->middleware(['auth','admin']);
Route::post('/active/{id}', [UserController::class, 'activeStatus'])->name('active')->middleware(['auth','admin']);
Route::post('/non-active/{id}', [UserController::class, 'nonActiveStatus'])->name('non-active')->middleware(['auth','admin']);
Route::post('/reset-password/{id}', [UserController::class, 'resetPassword'])->name('reset-password')->middleware(['auth','admin']);
Route::post('change-role-to-admin/{id}', [UserController::class, 'setAdmin'])->name('change-role-to-admin')->middleware(['auth','admin']);
Route::get('/list-pengajuan-customer', [ManageBookingController::class, 'index'])->name('list-pengajuan-customer')->middleware(['auth','admin']);
Route::post('/accept-pengajuan-customer/{id}', [ManageBookingController::class, 'acceptPengajuan'])->name('accept-pengajuan-customer')->middleware(['auth','admin']);
Route::post('/reject-pengajuan-customer/{id}', [ManageBookingController::class, 'rejectPengajuan'])->name('reject-pengajuan-customer')->middleware(['auth','admin']);
Route::get('/detail-pengajuan-customer/{id}', [ManageBookingController::class, 'detailPengajuan'])->name('detail-pengajuan-customer')->middleware(['auth','admin']);
Route::get('/list-service-customer', [ServiceController::class, 'listService'])->name('list-service-customer')->middleware(['auth','admin']);
Route::get('/service-customer/{id}', [ServiceController::class, 'serviceCustomer'])->name('service-customer')->middleware(['auth','admin']);
Route::get('/list-history-service', [ServiceController::class, 'listHistoryService'])->name('list-history-service')->middleware(['auth','admin']);
Route::get('/detail-service/{id}', [ServiceController::class, 'detailService'])->name('detail-service')->middleware(['auth','admin']);
Route::get('/cetak-service/{id}', [ServiceController::class, 'cetakService'])->name('cetak-service')->middleware(['auth','admin']);
Route::post('/transaction-service/{id}', [ServiceController::class, 'transactionService'])->name('transaction-service')->middleware(['auth','admin']);
Route::get('/download-history-service', [ServiceController::class, 'downloadHistoryService'])->name('download-history-service')->middleware(['auth','admin']);


//admin/superadmin/customer
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware(['auth']);
Route::post('/edit-profile/{id}', [UserController::class, 'editProfile'])->name('edit-profile')->middleware(['auth']);

//user
Route::get('/jadwal-service', [BookingCustomerController::class, 'jadwalService'])->name('jadwal-service')->middleware(['auth']);
Route::get('/all-sparepart', [CustomerSparepartController::class, 'allSparepart'])->name('all-sparepart');
Route::get('/detail-sparepart/{id}', [CustomerSparepartController::class, 'detailSparepart'])->name('detail-sparepart')->middleware(['auth']);
Route::get('/create-pengajuan-booking', [BookingCustomerController::class, 'createPengajuanBooking'])->name('create-pengajuan-booking')->middleware(['auth']);
Route::get('/list-pengajuan', [BookingCustomerController::class, 'listPengajuan'])->name('list-pengajuan')->middleware(['auth']);
Route::post('/pengajuan-booking', [BookingCustomerController::class, 'pengajuanBooking'])->name('pengajuan-booking')->middleware(['auth']);
Route::delete('/delete-booking/{id}', [BookingCustomerController::class, 'deleteBooking'])->name('delete-booking')->middleware(['auth']);