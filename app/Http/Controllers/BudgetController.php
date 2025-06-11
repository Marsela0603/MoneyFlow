<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class BudgetController extends Controller
{
    public function index()
    {
        $categories = Category::where('user_id', Auth::id())->where('type', 'expense')->get();
        $reminders = Budget::where('user_id', Auth::id())->with('category')->get();

        return view('dashboard.budgets.index', compact('categories', 'reminders'));
    }

    public function create()
    {
        $categories = Category::where('user_id', Auth::id())->where('type', 'expense')->get();
        return view('dashboard.budgets.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'limit_amount' => 'required|numeric|min:0',
            'period' => 'required|in:monthly,weekly',
            'month' => 'required|in:January,February,March,April,May,June,July,August,September,October,November,December',
            'year' => 'required|integer|min:2000|max:' . (date('Y') + 10),
        ]);

        $data = $request->only(['category_id', 'limit_amount', 'period', 'month', 'year']);
        $data['user_id'] = Auth::id();

        Budget::create($data);

        return redirect()->route('dashboard.budget.index')->with('success', 'Budget reminder created successfully.');
    }

    public function destroy(Budget $budget)
    {
        if ($budget->user_id !== Auth::id()) {
            abort(403);
        }

        $budget->delete();

        return redirect()->route('dashboard.budget.index')->with('success', 'Budget reminder deleted successfully.');
    }
}
