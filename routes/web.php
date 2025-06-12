<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\NotificationController;

// landing page
Route::get('/', function () {
    return view('landingpage.index');
})->name('landingpage');



// Menampilkan halaman notifikasi
Route::get('/dashboard/notifications', [NotificationController::class, 'index'])
    ->name('dashboard.notifications.index')
    ->middleware('auth');

// Menandai semua notifikasi sebagai telah dibaca
Route::post('/dashboard/notifications/read-all', [NotificationController::class, 'readAll'])
    ->name('dashboard.notifications.readAll')
    ->middleware('auth');

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/account', [AccountController::class, 'index']);
    Route::get('/reports', [ReportController::class, 'index']);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard/categories', CategoryController::class);

    
Route::prefix('dashboard/budget')->middleware('auth')->group(function () {
    Route::get('/', [BudgetController::class, 'index'])->name('dashboard.budget.index');
    Route::get('/create', [BudgetController::class, 'create'])->name('dashboard.budgets.create');
    Route::post('/store', [BudgetController::class, 'store'])->name('dashboard.budgets.store');
    Route::delete('/{budget}', [BudgetController::class, 'destroy'])->name('dashboard.budget.destroy');
});

    

    Route::prefix('dashboard/transactions')->group(function () {
        Route::get('/income', [TransactionController::class, 'income'])->name('transactions.income.index');
        Route::get('/income/create', [TransactionController::class, 'createIncome'])->name('transactions.income.create');
        Route::post('/income', [TransactionController::class, 'storeIncome'])->name('transactions.income.store');
        Route::get('/income/{id}/edit', [TransactionController::class, 'editIncome'])->name('transactions.income.edit');
        Route::put('/income/{id}', [TransactionController::class, 'updateIncome'])->name('transactions.income.update');
        Route::delete('/income/{id}', [TransactionController::class, 'destroyIncome'])->name('transactions.income.destroy');

        Route::get('/expense', [TransactionController::class, 'expense'])->name('transactions.expense.index');
        Route::get('/expense/create', [TransactionController::class, 'createExpense'])->name('transactions.expense.create');
        Route::post('/expense', [TransactionController::class, 'storeExpense'])->name('transactions.expense.store');
        Route::get('/expense/{id}/edit', [TransactionController::class, 'editExpense'])->name('transactions.expense.edit');
        Route::put('/expense/{id}', [TransactionController::class, 'updateExpense'])->name('transactions.expense.update');
        Route::delete('/expense/{id}', [TransactionController::class, 'destroyExpense'])->name('transactions.expense.destroy');


    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
