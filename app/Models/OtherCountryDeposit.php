<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class OtherCountryDeposit extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable = [
        'datetime_other_country_deposit',
        'other_country_deposit_customer',
        'rmb_other_country_deposit',
        'usd_other_country_deposit',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getOtherCountryDeposit($from, $until)
    {
        $other_country_deposit = OtherCountryDeposit::whereBetween('datetime_other_country_deposit', [$from, $until])->get();

        return $other_country_deposit;
    }

    public static function getOtherCountryDepositName($other_country_deposit_customer, $from, $until)
    {
        $other_country_deposit = OtherCountryDeposit::where('other_country_deposit_customer',$other_country_deposit_customer)->whereBetween('datetime_other_country_deposit', [$from, $until])->get();

        return $other_country_deposit;
    }


}
