<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class OtherDeposit extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable = [
        'datetime_other_deposit',
        'other_deposit_customer',
        'rmb_other_deposit',
        'usd_other_deposit',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getOtherDeposit($from, $until)
    {
        $other_deposit = OtherDeposit::whereBetween('datetime_other_deposit', [$from, $until])->get();

        return $other_deposit;
    }

    public static function getOtherDepositName($other_deposit_customer, $from, $until)
    {
        $other_deposit = OtherDeposit::where('other_deposit_customer',$other_deposit_customer)->whereBetween('datetime_other_deposit', [$from, $until])->get();

        return $other_deposit;
    }




}
