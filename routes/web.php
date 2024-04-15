<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
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

