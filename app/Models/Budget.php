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
        $query = Transaction::where('user_id', $this->user_id)
            ->where('type', 'expense')
            ->where('category_id', $this->category_id);

        if ($this->period === 'monthly') {
            $query->whereMonth('date', date('m', strtotime($this->month)))
                  ->whereYear('date', $this->year);
        } elseif ($this->period === 'weekly') {
            $weekStart = now()->startOfWeek();
            $weekEnd = now()->endOfWeek();
            $query->whereBetween('date', [$weekStart, $weekEnd]);
        }

        return $query->sum('amount') >= $this->limit_amount;
    }
}
