<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrderDetailsController;

Route::get('/customers', [CustomersController::class, 'index'])->name('customers.index');

Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create'); // Hiển thị form

Route::post('/customers', [CustomersController::class, 'store'])->name('customers.store'); // Xử lý lưu dữ liệu

Route::get('/customers/edit/{id}', [CustomersController::class, 'edit'])->name('customers.edit');
Route::put('/customers/update/{id}', [CustomersController::class, 'update'])->name('customers.update');

// Route xóa khách hàng
Route::delete('/customers/{id}', [CustomersController::class, 'destroy'])->name('customers.destroy');

//Bang orders
Route::get('/orders', [OrdersController::class, 'index'])->name('orders.index');

Route::resource('orders', OrdersController::class);

//Bang order_details

Route::get('/orderDetail', [OrderDetailsController::class, 'index'])->name('orderDetail.index');

Route::get('/orderDetail/edit/{order_id}/{product_id}', [OrderDetailsController::class, 'edit'])->name('orderDetail.edit');
Route::put('/orderDetail/edit/{order_id}/{product_id}', [OrderDetailsController::class, 'update'])->name('orderDetail.update');


Route::get('/customers/orders', [CustomersController::class, 'searchCustomersWithOrders'])->name('customers.orders');

Route::get('/orders/search', [OrdersController::class, 'searchOrders'])->name('orders.search');
