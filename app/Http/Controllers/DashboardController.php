<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Budget;
use Carbon\Carbon;

class DashboardController extends Controller
{
   public function index()
    {
        $userId = auth()->id();

        $totalIncome = Transaction::where('user_id', $userId)->where('type', 'income')->sum('amount');
        $totalExpense = Transaction::where('user_id', $userId)->where('type', 'expense')->sum('amount');
        $currentBalance = $totalIncome - $totalExpense;

        $recentTransactions = Transaction::with('category')
            ->where('user_id', $userId)
            ->orderBy('date', 'desc')
            ->take(10)
            ->get();

        return view('dashboard.index', compact(
            'totalIncome',
            'totalExpense',
            'currentBalance',
            'recentTransactions'
        ));
    }
}