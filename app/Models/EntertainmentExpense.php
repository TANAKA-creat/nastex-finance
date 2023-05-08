<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class EntertainmentExpense extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable =[
        'datetime_entertainment_expense',
        'entertainment_expense_creditor',
        'rmb_entertainment_expense',
        'usd_entertainment_expense',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getEntertainmentExpense($from, $until)
    {
        $entertainment_expense = EntertainmentExpense::whereBetween('datetime_entertainment_expense', [$from, $until])->get();

        return $entertainment_expense;
    }

    
    public static function getEntertainmentExpenseName($entertainment_expense_creditor, $from, $until)
    {
        $entertainment_expense = EntertainmentExpense::where('entertainment_expense_creditor',$entertainment_expense_creditor)->whereBetween('datetime_entertainment_expense', [$from, $until])->get();

        return $entertainment_expense;
    }


}
