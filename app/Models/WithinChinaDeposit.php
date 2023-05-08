<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class WithinChinaDeposit extends Model
{
    use HasFactory;

    use Sortable;


    protected $fillable = [
        'datetime_within_china_deposit',
        'within_china_deposit_customer',
        'rmb_within_china_deposit',
        'usd_within_china_deposit',
        'category_id',
        'within_china_deposit_customer_id',
        'within_china_deposit_customer_name'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }


    public static function getWithinChinaDeposit($from, $until)
    {

        $within_china_deposit = WithinChinaDeposit::whereBetween('datetime_within_china_deposit', [$from, $until])->get();

        return $within_china_deposit;
    }


    public function customer()
    {
        return $this->hasOne('App\Models\Customer');
    }

    public static function getWithinChinaDepositName($within_china_deposit_customer, $from, $until)
    {
        $within_china_deposit = WithinChinaDeposit::where('within_china_deposit_customer',$within_china_deposit_customer)->whereBetween('datetime_within_china_deposit', [$from, $until])->get();

        return $within_china_deposit;
    }

    // // 顧客IDを取得する
    // public static function getCustomerId($customer_name)
    // {
    //     $customer = Customer::where('customer_name', $customer_name)->first('customer_id');

    //     return $customer;
    // }
    

    
    // protected $primaryKey = 'within_china_deposit_customer';
    // protected $keyType = 'string';

}
