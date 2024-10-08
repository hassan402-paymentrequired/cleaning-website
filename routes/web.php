<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Service\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/pay', [\App\Http\Controllers\Service\ServicePaymentController::class, 'redirectToGateway'])->name('pay');

    Route::get('/payment/callback', [\App\Http\Controllers\Service\ServicePaymentController::class, 'handleGatewayCallback']);
});

Route::get('/service', [ServiceController::class, 'index']);
Route::get('/service/book', [ServiceController::class, 'create']);



require __DIR__.'/auth.php';
