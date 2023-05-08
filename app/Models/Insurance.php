<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Insurance extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable =[
        'datetime_insurance',
        'insurance_creditor',
        'rmb_insurance',
        'usd_insurance',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getInsurance($from, $until)
    {
        $insurance = Insurance::whereBetween('datetime_insurance', [$from, $until])->get();

        return $insurance;
    }

    public static function getInsuranceName($insurance_creditor, $from, $until)
    {
        $insurance = Insurance::where('insurance_creditor',$insurance_creditor)->whereBetween('datetime_insurance', [$from, $until])->get();

        return $insurance;
    }

}
