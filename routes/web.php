<?php

// use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
// Route::get('home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('checkout', CheckoutController::class);
    Route::get('/checkout/view', [CheckoutController::class, 'viewOnly'])->name('checkout.view');
    Route::get('export/excel', [ExportController::class, 'exportExcel'])->name('export.excel');
Route::get('export/pdf', [ExportController::class, 'exportPDF'])->name('export.pdf');
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


