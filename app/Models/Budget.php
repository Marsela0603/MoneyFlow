<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Transaction;

class Budget extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'limit_amount',
        'period',
        'month',
        'year'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function isExceeded()
    {
        $totalExpenses = $this->category
            ->transactions()
            ->where('user_id', $this->user_id)
            ->whereMonth('date', date('m', strtotime($this->month)))
            ->whereYear('date', $this->year)
            ->sum('amount');

        return $totalExpenses > $this->limit_amount;
    }
}
