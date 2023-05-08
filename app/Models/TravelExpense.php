<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class TravelExpense extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable =[
        'datetime_travel_expense',
        'travel_expense_creditor',
        'rmb_travel_expense',
        'usd_travel_expense',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getTravelExpense($from, $until)
    {
        $travel_expense = TravelExpense::whereBetween('datetime_travel_expense', [$from, $until])->get();

        return $travel_expense;
    }

    public static function getTravelExpenseName($travel_expense_creditor, $from, $until)
    {
        $travel_expense = TravelExpense::where('travel_expense_creditor',$travel_expense_creditor)->whereBetween('datetime_travel_expense', [$from, $until])->get();

        return $travel_expense;
    }

}
