<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class SalaryCredit extends Model
{
    use HasFactory;

    use Sortable;
    
    protected $fillable =[
        'datetime_salary_credit',
        'salary_creditor',
        'rmb_salary_credit',
        'usd_salary_credit',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getSalaryCredit($from, $until)
    {
        $salary_credit = SalaryCredit::whereBetween('datetime_salary_credit', [$from, $until])->get();

        return $salary_credit;
    }

    public static function getSalaryCreditName($salary_creditor, $from, $until)
    {
        $salary_credit = SalaryCredit::where('salary_creditor',$salary_creditor)->whereBetween('datetime_salary_credit', [$from, $until])->get();

        return $salary_credit;
    }


}
