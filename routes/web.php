<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\LandingPageController;

// =========================
// Landing Page
// =========================

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage.index');

// =========================
// Authenticated Routes
// =========================
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Contact & Account
        Route::get('/contact', [ContactController::class, 'index'])->name('dashboard.contact');
        Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

        Route::get('/account', [AccountController::class, 'index'])->name('dashboard.account');

        // Reports
        Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');

        // Notifications
        Route::get('/notifications', [NotificationController::class, 'index'])->name('dashboard.notifications.index');
        Route::post('/notifications/read-all', [NotificationController::class, 'readAll'])->name('dashboard.notifications.readAll');

        // Budget
        Route::prefix('budget')->group(function () {
            Route::get('/', [BudgetController::class, 'index'])->name('dashboard.budget.index');
            Route::get('/create', [BudgetController::class, 'create'])->name('dashboard.budgets.create');
            Route::post('/store', [BudgetController::class, 'store'])->name('dashboard.budgets.store');
            Route::get('/{budget}/edit', [BudgetController::class, 'edit'])->name('dashboard.budget.edit');
            Route::put('/{budget}', [BudgetController::class, 'update'])->name('dashboard.budget.update');
            Route::delete('/{budget}', [BudgetController::class, 'destroy'])->name('dashboard.budget.destroy');
        });

        // Transactions
        Route::prefix('transactions')->group(function () {
            // Income
            Route::get('/income', [TransactionController::class, 'income'])->name('transactions.income.index');
            Route::get('/income/create', [TransactionController::class, 'createIncome'])->name('transactions.income.create');
            Route::post('/income', [TransactionController::class, 'storeIncome'])->name('transactions.income.store');
            Route::get('/income/{id}/edit', [TransactionController::class, 'editIncome'])->name('transactions.income.edit');
            Route::put('/income/{id}', [TransactionController::class, 'updateIncome'])->name('transactions.income.update');
            Route::delete('/income/{id}', [TransactionController::class, 'destroyIncome'])->name('transactions.income.destroy');

            // Expense
            Route::get('/expense', [TransactionController::class, 'expense'])->name('transactions.expense.index');
            Route::get('/expense/create', [TransactionController::class, 'createExpense'])->name('transactions.expense.create');
            Route::post('/expense', [TransactionController::class, 'storeExpense'])->name('transactions.expense.store');
            Route::get('/expense/{id}/edit', [TransactionController::class, 'editExpense'])->name('transactions.expense.edit');
            Route::put('/expense/{id}', [TransactionController::class, 'updateExpense'])->name('transactions.expense.update');
            Route::delete('/expense/{id}', [TransactionController::class, 'destroyExpense'])->name('transactions.expense.destroy');
        });

        // Categories (Resource)
        Route::resource('categories', CategoryController::class)->names([
            'index' => 'dashboard.categories.index',
            'create' => 'dashboard.categories.create',
            'store' => 'dashboard.categories.store',
            'show' => 'dashboard.categories.show',
            'edit' => 'dashboard.categories.edit',
            'update' => 'dashboard.categories.update',
            'destroy' => 'dashboard.categories.destroy',
        ]);
    });

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// =========================
// Auth Routes
// =========================
require __DIR__.'/auth.php';
