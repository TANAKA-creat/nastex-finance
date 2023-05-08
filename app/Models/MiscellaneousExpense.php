<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class MiscellaneousExpense extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable =[
        'datetime_miscellaneous_expense',
        'miscellaneous_expense_creditor',
        'rmb_miscellaneous_expense',
        'usd_miscellaneous_expense',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getMiscellaneousExpense($from, $until)
    {
        $miscellaneous_expense = MiscellaneousExpense::whereBetween('datetime_miscellaneous_expense', [$from, $until])->get();

        return $miscellaneous_expense;
    }

    public static function getMiscellaneousExpenseName($miscellaneous_expense_creditor, $from, $until)
    {
        $miscellaneous_expense = MiscellaneousExpense::where('miscellaneous_expense_creditor',$miscellaneous_expense_creditor)->whereBetween('datetime_miscellaneous_expense', [$from, $until])->get();

        return $miscellaneous_expense;
    }




}
