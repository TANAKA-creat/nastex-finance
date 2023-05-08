<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Other extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable =[
        'datetime_other',
        'other_creditor',
        'rmb_other',
        'usd_other',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getOther($from, $until)
    {
        $other = Other::whereBetween('datetime_other', [$from, $until])->get();

        return $other;
    }

    public static function getOtherName($other_creditor, $from, $until)
    {
        $other = Other::where('other_creditor',$other_creditor)->whereBetween('datetime_other', [$from, $until])->get();

        return $other;
    }

}
