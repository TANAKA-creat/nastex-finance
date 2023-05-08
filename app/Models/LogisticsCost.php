<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class LogisticsCost extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable =[
        'datetime_logistics_cost',
        'logistics_cost_creditor',
        'rmb_logistics_cost',
        'usd_logistics_cost',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getLogisticsCost($from, $until)
    {
        $logistics_cost = LogisticsCost::whereBetween('datetime_logistics_cost', [$from, $until])->get();

        return $logistics_cost;
    }

    public static function getLogisticsCostName($logistics_cost_creditor, $from, $until)
    {
        $logistics_cost = LogisticsCost::where('logistics_cost_creditor',$logistics_cost_creditor)->whereBetween('datetime_logistics_cost', [$from, $until])->get();

        return $logistics_cost;
    }

}
