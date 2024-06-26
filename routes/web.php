<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ItemPaymentController;


Route::group(['middleware' => ['auth']], function () {
Route::get('/', function () {return view('index');})->name('index');
//suppliers
Route::get('/search', [ClientController::class, 'search'])->name('clients.search');
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('new', [ClientController::class, 'new_view'])->name('clients.store-view');
Route::post('create', [ClientController::class, 'create'])->name('clients.store');
Route::get('view/{id}', [ClientController::class, 'single_view'])->name('clients.view');
Route::get('edit/{id}', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('edit/{id}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('delete/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');
//Pdfs 
// commented , will used later Route::get('/pdf_info/{client_id}', [ClientController::class, 'pdf_info'])->name('pdf.info');
Route::get('/pdf_payment/{client_id}', [ClientController::class, 'pdf_payment'])->name('pdf.payment');
//Products
Route::get('product-new/{id}', [ProductController::class, 'new_view'])->name('products.store-view');
Route::post('product-create/{id}', [ProductController::class, 'create'])->name('products.store');
Route::get('product-view/{id}/{client_id}', [ProductController::class, 'single_view'])->name('products.view');
Route::get('product-edit/{id}/{client_id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('product-edit/{id}/{client_id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('product-delete/{id}/{client_id}', [ProductController::class, 'destroy'])->name('products.destroy');
//Payment
Route::get('payment-new/{id}/{client_id}/{to_pay}', [PaymentController::class, 'new_view'])->name('payment.store-view');
Route::post('payment-create/{id}/{client_id}', [PaymentController::class, 'create'])->name('payment.store');
Route::get('payment-view/{id}/{client_id}/{to_pay}', [PaymentController::class, 'single_view'])->name('payment.view');
Route::get('payment-edit/{payment_id}/{product_id}/{client_id}/{to_pay}', [PaymentController::class, 'edit'])->name('payment.edit');
Route::put('payment-edit/{id}/{client_id}', [PaymentController::class, 'update'])->name('payment.update');
Route::delete('payment-delete/{payment_id}/{client_id}', [PaymentController::class, 'destroy'])->name('payment.destroy');
// user Auth
Route::get('signout',   [AuthController::class,   'sing_out'])->name('signout');
//SupplierController
Route::resource('suppliers', SupplierController::class);
Route::resource('items', ItemController::class);
Route::resource('ItemPayment', ItemPaymentController::class);
}); 

Route::group(['middleware' => 'guest'], function () {
    // user Auth
    Route::post('login/new', [AuthController::class,   'login'])->name('login.custom');
    Route::post('register/store', [AuthController::class,   'new_user'])->name('register.custom');
    Route::get('login',     [AuthController::class,   'login_view'])->name('login');
    Route::get('register',  [AuthController::class,   'register_view'])->name('register');
});
