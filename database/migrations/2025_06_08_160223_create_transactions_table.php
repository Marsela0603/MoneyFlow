<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Category; 
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function income()
    {
        $transactions = Transaction::with('category')
            ->where('user_id', auth()->id())
            ->where('type', 'income')
            ->orderBy('date', 'desc')
            ->get();

        return view('dashboard.transactions.income.index', compact('transactions'));
    }

    public function createIncome()
    {
        $categories = Category::all(); // Ambil semua kategori
        return view('dashboard.transactions.income.create', compact('categories'));
    }

    public function storeIncome(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        Transaction::create([
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
            'amount' => $request->amount,
            'date' => $request->date,
            'description' => $request->description,
            'type' => 'income',
        ]);

        return redirect()->route('transactions.income.index')->with('success', 'Income added successfully!');
    }

    public function expense()
    {
        $transactions = Transaction::with('category')
            ->where('user_id', auth()->id())
            ->where('type', 'expense')
            ->orderBy('date', 'desc')
            ->get();

        return view('dashboard.transactions.expense.index', compact('transactions'));
    }

    public function createExpense()
    {
        $categories = Category::all(); // Ambil semua kategori
        return view('dashboard.transactions.expense.create', compact('categories'));
    }

    public function storeExpense(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        Transaction::create([
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
            'amount' => $request->amount,
            'date' => $request->date,
            'description' => $request->description,
            'type' => 'expense',
        ]);

        return redirect()->route('transactions.expense.index')->with('success', 'Expense added successfully!');
    }
}
