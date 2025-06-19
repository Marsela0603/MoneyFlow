<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;
use App\Models\Category;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class BudgetController extends Controller
{
    public function index()
    {
        $categories = Category::where('user_id', Auth::id())->where('type', 'expense')->get();
        $reminders = Budget::where('user_id', Auth::id())->with('category')->get();

        foreach ($reminders as $reminder) {
            if ($reminder->isExceeded()) {
                $existing = Notification::where('user_id', Auth::id())
                    ->where('title', 'Budget Exceeded')
                    ->where('message', 'Your' . $reminder->category->name . ' category spending is over the limit!')
                    ->first();

                if (!$existing) {
                    Notification::create([
                        'user_id' => Auth::id(),
                        'title' => 'Budget Exceeded',
                        'message' => 'Your' . $reminder->category->name . ' category spending is over the limit!',
                    ]);
                }
            }
        }

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

    public function edit(Budget $budget)
{
    if ($budget->user_id !== Auth::id()) {
        abort(403);
    }

    $categories = Category::where('user_id', Auth::id())->where('type', 'expense')->get();
    return view('dashboard.budgets.edit', compact('budget', 'categories'));
}

public function update(Request $request, Budget $budget)
{
    if ($budget->user_id !== Auth::id()) {
        abort(403);
    }

    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'limit_amount' => 'required|numeric|min:0',
        'period' => 'required|in:monthly,weekly',
        'month' => 'required|in:January,February,March,April,May,June,July,August,September,October,November,December',
        'year' => 'required|integer|min:2000|max:' . (date('Y') + 10),
    ]);

    $budget->update($request->only(['category_id', 'limit_amount', 'period', 'month', 'year']));

    return redirect()->route('dashboard.budget.index')->with('success', 'Budget reminder updated successfully.');
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
