<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $totalIncome = Transaction::where('user_id', $userId)->where('type', 'income')->sum('amount');
        $totalExpense = Transaction::where('user_id', $userId)->where('type', 'expense')->sum('amount');
        $currentBalance = $totalIncome - $totalExpense;

        $budgetTarget = 3000000;
        $budgetUsed = Transaction::where('user_id', $userId)
            ->where('type', 'expense')
            ->whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->sum('amount');
        $budgetUsedPercent = $budgetTarget > 0 ? round(($budgetUsed / $budgetTarget) * 100) : 0;

        $recentTransactions = Transaction::where('user_id', $userId)
            ->orderBy('date', 'desc')
            ->take(10)
            ->get();

        // Contoh notifikasi
        $notifications = [];
        if ($budgetUsedPercent >= 80) {
            $notifications[] = "Budget bulan ini hampir habis!";
        }
        if ($budgetUsedPercent >= 100) {
            $notifications[] = "Budget bulan ini telah terlampaui!";
        }

        $recentTransactions = Transaction::with('category') // Tambah ini
    ->where('user_id', $userId)
    ->orderBy('date', 'desc')
    ->take(10)
    ->get();


        return view('dashboard.index', compact(
            'totalIncome',
            'totalExpense',
            'currentBalance',
            'budgetTarget',
            'budgetUsedPercent',
            'recentTransactions',
            'notifications'
        ));
    }
}
