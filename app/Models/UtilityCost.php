<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class UtilityCost extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable =[
        'datetime_utility_cost',
        'utility_cost_creditor',
        'rmb_utility_cost',
        'usd_utility_cost',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getUtilityCost($from, $until)
    {
        $utility_cost = UtilityCost::whereBetween('datetime_utility_cost', [$from, $until])->get();

        return $utility_cost;
    }

    public static function getUtilityCostName($utility_cost_creditor, $from, $until)
    {
        $utility_cost = UtilityCost::where('utility_cost_creditor',$utility_cost_creditor)->whereBetween('datetime_utility_cost', [$from, $until])->get();

        return $utility_cost;
    }

}
