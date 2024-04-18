<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
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
//clients
// Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [ClientController::class, 'index'])->name('clients.index');
    Route::get('new', [ClientController::class, 'new_view'])->name('clients.store-view');
    Route::post('create', [ClientController::class, 'create'])->name('clients.store');
    Route::get('view/{id}', [ClientController::class, 'single_view'])->name('clients.view');
    Route::get('edit/{id}', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('edit/{id}', [ClientController::class, 'update'])->name('clients.update');
    Route::delete('delete/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');
    
// });

//Products
Route::get('product-new/{id}', [ProductController::class, 'new_view'])->name('products.store-view');
Route::post('product-create/{id}', [ProductController::class, 'create'])->name('products.store');
Route::get('product-view/{id}/{client_id}', [ProductController::class, 'single_view'])->name('products.view');
Route::get('product-edit/{id}/{client_id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('product-edit/{id}/{client_id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('product-delete/{id}/{client_id}', [ProductController::class, 'destroy'])->name('products.destroy');


