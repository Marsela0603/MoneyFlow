<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $userId = auth()->id();
        $range = $request->query('range', 'week');

        // Fixed cards (Do not change)
        $todayTransactions = Transaction::where('user_id', $userId)
            ->whereDate('date', Carbon::today())
            ->count();

        $thisMonthIncome = Transaction::where('user_id', $userId)
            ->where('type', 'income')
            ->whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->sum('amount');

        $thisMonthExpense = Transaction::where('user_id', $userId)
            ->where('type', 'expense')
            ->whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->sum('amount');

        $yesterdayTransactions = Transaction::where('user_id', $userId)
            ->whereDate('date', Carbon::yesterday())
            ->count();

        $lastMonthIncome = Transaction::where('user_id', $userId)
            ->where('type', 'income')
            ->whereMonth('date', now()->subMonth()->month)
            ->whereYear('date', now()->subMonth()->year)
            ->sum('amount');

        $lastMonthExpense = Transaction::where('user_id', $userId)
            ->where('type', 'expense')
            ->whereMonth('date', now()->subMonth()->month)
            ->whereYear('date', now()->subMonth()->year)
            ->sum('amount');

        $transactionGrowth = $yesterdayTransactions > 0
            ? (($todayTransactions - $yesterdayTransactions) / $yesterdayTransactions) * 100
            : null;

        $incomeGrowth = $lastMonthIncome > 0
            ? (($thisMonthIncome - $lastMonthIncome) / $lastMonthIncome) * 100
            : null;

        $expenseGrowth = $lastMonthExpense > 0
            ? (($thisMonthExpense - $lastMonthExpense) / $lastMonthExpense) * 100
            : null;

        // Summary filter
        $dateFilter = function ($query) use ($range) {
            if ($range === 'week') {
                $query->whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()]);
            } elseif ($range === 'month') {
                $query->whereMonth('date', now()->month)->whereYear('date', now()->year);
            } elseif ($range === 'year') {
                $query->whereYear('date', now()->year);
            }
        };

        $transactionsCount = Transaction::where('user_id', $userId)->tap($dateFilter)->count();
        $incomeSum = Transaction::where('user_id', $userId)->where('type', 'income')->tap($dateFilter)->sum('amount');
        $expenseSum = Transaction::where('user_id', $userId)->where('type', 'expense')->tap($dateFilter)->sum('amount');

        // Chart data
        $chartLabels = [];
        $incomeSeries = [];
        $expenseSeries = [];
        $transactionSeries = [];

        if ($range === 'week') {
            $start = now()->startOfWeek();
            for ($i = 0; $i < 7; $i++) {
                $date = $start->copy()->addDays($i);
                $chartLabels[] = $date->format('D');

                $incomeSeries[] = Transaction::where('user_id', $userId)
                    ->where('type', 'income')
                    ->whereDate('date', $date)
                    ->sum('amount');

                $expenseSeries[] = Transaction::where('user_id', $userId)
                    ->where('type', 'expense')
                    ->whereDate('date', $date)
                    ->sum('amount');

                $transactionSeries[] = Transaction::where('user_id', $userId)
                    ->whereDate('date', $date)
                    ->count();
            }
        } elseif ($range === 'month') {
            $start = now()->startOfMonth();
            $daysInMonth = now()->daysInMonth;

            for ($i = 1; $i <= $daysInMonth; $i++) {
                $date = $start->copy()->day($i);
                $chartLabels[] = $date->format('d');

                $incomeSeries[] = Transaction::where('user_id', $userId)
                    ->where('type', 'income')
                    ->whereDate('date', $date)
                    ->sum('amount');

                $expenseSeries[] = Transaction::where('user_id', $userId)
                    ->where('type', 'expense')
                    ->whereDate('date', $date)
                    ->sum('amount');

                $transactionSeries[] = Transaction::where('user_id', $userId)
                    ->whereDate('date', $date)
                    ->count();
            }
        } elseif ($range === 'year') {
            for ($i = 1; $i <= 12; $i++) {
                $chartLabels[] = Carbon::create()->month($i)->format('M');

                $incomeSeries[] = Transaction::where('user_id', $userId)
                    ->where('type', 'income')
                    ->whereMonth('date', $i)
                    ->whereYear('date', now()->year)
                    ->sum('amount');

                $expenseSeries[] = Transaction::where('user_id', $userId)
                    ->where('type', 'expense')
                    ->whereMonth('date', $i)
                    ->whereYear('date', now()->year)
                    ->sum('amount');

                $transactionSeries[] = Transaction::where('user_id', $userId)
                    ->whereMonth('date', $i)
                    ->whereYear('date', now()->year)
                    ->count();
            }
        }

        return view('dashboard.reports.index', compact(
            'todayTransactions', 'thisMonthIncome', 'thisMonthExpense',
            'transactionGrowth', 'incomeGrowth', 'expenseGrowth',
            'transactionsCount', 'incomeSum', 'expenseSum', 'range',
            'chartLabels', 'incomeSeries', 'expenseSeries', 'transactionSeries'
        ));
    }
}
