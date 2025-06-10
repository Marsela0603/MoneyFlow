<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Category;  // Import Category model
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


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
        // Ambil semua kategori untuk income
         $categories = Category::where('type', 'income')->get(); // Anda bisa menyesuaikan ini jika ada filter tertentu

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

    public function editIncome($id)
{
    $transaction = Transaction::where('id', $id)
        ->where('user_id', auth()->id())
        ->where('type', 'income')
        ->firstOrFail();

    $categories = Category::where('type', 'income')->get();

    return view('dashboard.transactions.income.edit', compact('transaction', 'categories'));
}

public function updateIncome(Request $request, $id)
{
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'amount' => 'required|numeric|min:0',
        'date' => 'required|date',
        'description' => 'nullable|string',
    ]);

    $transaction = Transaction::where('id', $id)
        ->where('user_id', auth()->id())
        ->where('type', 'income')
        ->firstOrFail();

    $transaction->update([
        'category_id' => $request->category_id,
        'amount' => $request->amount,
        'date' => $request->date,
        'description' => $request->description,
    ]);

    return redirect()->route('transactions.income.index')->with('success', 'Income updated successfully!');
}

    public function destroyIncome($id)
    {
    $transaction = Transaction::where('id', $id)
        ->where('user_id', Auth::id())
        ->where('type', 'income')
        ->firstOrFail();

    $transaction->delete();

    return redirect()->route('transactions.income.index')->with('success', 'Income deleted successfully!');
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
        // Ambil semua kategori dengan tipe 'expense'
        $categories = Category::where('type', 'expense')->get();
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

    
    public function editExpense($id)
{
    $transaction = Transaction::where('id', $id)
        ->where('user_id', Auth::id())
        ->where('type', 'expense')
        ->firstOrFail();

    $categories = Category::where('type', 'expense')->get();
    

    return view('dashboard.transactions.expense.edit', compact('transaction', 'categories'));
}

public function updateExpense(Request $request, $id)
{
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'amount' => 'required|numeric|min:0',
        'date' => 'required|date',
        'description' => 'nullable|string',
    ]);

    $transaction = Transaction::where('id', $id)
        ->where('user_id', Auth::id())
        ->where('type', 'expense')
        ->firstOrFail();

    $transaction->update([
        'category_id' => $request->category_id,
        'amount' => $request->amount,
        'date' => $request->date,
        'description' => $request->description,
    ]);

    return redirect()->route('transactions.expense.index')->with('success', 'Expense updated successfully!');
}
public function destroyExpense($id)
{
    $transaction = Transaction::where('id', $id)
        ->where('user_id', Auth::id())
        ->where('type', 'expense')
        ->firstOrFail();

    $transaction->delete();

    return redirect()->route('transactions.expense.index')->with('success', 'Expense deleted successfully!');
}

    

}
