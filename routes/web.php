<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierSubscriptionController;
use App\Http\controllers\Admin\DashboardController;
use App\Http\controllers\frontend\FrontsController;
use App\Http\Controllers\WalletController;
use App\Http\controllers\frontend\UserController;
use App\Http\controllers\Admin\OrderController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [FrontsController::class, 'index']);
Route::post('insert-wallet', [WalletController::class, 'store']);
Route::get('my-orders', [UserController::class, 'index']);
Route::get('my-orders/{id}', [UserController::class, 'destroy']);
                             //admin users routes
 Route::get('users', [DashboardController::class, 'users']);
 Route::delete('admin/users/{id}',[DashboardController::class, 'destroy']);
                              // admin orders routes
 Route::get('orders', [OrderController::class, 'index']);
 Route::get('order-view/{id}', [OrderController::class, 'view']);
 Route::put('update.order/{id}', [OrderController::class, 'updateorder']);
 Route::get('order-history', [OrderController::class, 'orderhistory']);
 Route::delete('admin/orders/{id}',[OrderController::class, 'destroy']);
Route::middleware(['auth', 'isAdmin'])->group(function () {
   Route::get('/dashboard', function () {
    return view('admin.index');
 });

});
