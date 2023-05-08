<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Detail extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable = [
        'datetime',
        'customer',
        'rmb',
        'usd',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getDetail($from, $until)
    {
        $detail = Detail::whereBetween('datetime', [$from, $until])->get();

        return $detail;
    }

    public static function getDetailName($customer, $from, $until)
    {
        $detail = Detail::where('customer',$customer)->whereBetween('datetime', [$from, $until])->get();

        return $detail;
    }


}
