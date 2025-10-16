
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\SocialServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FileDownloadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\BalanceController;

Route::get('/', [LandingPageController::class, 'index']);

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Balance routes
    Route::get('/balance', [BalanceController::class, 'index'])->name('balance.index');
    Route::post('/balance/deposit', [BalanceController::class, 'deposit'])->name('balance.deposit');
    Route::post('/balance/withdraw', [BalanceController::class, 'withdraw'])->name('balance.withdraw');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/affiliate', [AffiliateController::class, 'index'])->name('affiliate.dashboard');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
});

Route::get('/services', [SocialServiceController::class, 'index'])->name('services.index');
Route::get('/download/{filename}', [FileDownloadController::class, 'download']);

require __DIR__.'/auth.php';
