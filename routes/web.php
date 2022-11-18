<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/create', [QrCodeController::class, 'create'])->name('create');
Route::get('/view', [QrCodeController::class, 'viewQr'])->name('view');
Route::get('/qrcode', [QrCodeController::class, 'index']);
