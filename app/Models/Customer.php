<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Customer extends Model
{
    use HasFactory;

    use Sortable;

    public $sortable = [
        'customer_name',
        'customer_id',
    ];


    protected $fillable = [
        'customer_name',
        'customer_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function within_china_deposit()
    {
        return $this->hasOne('App\Models\WithinChinaDeposit');
    }

    // protected $primaryKey = 'customer_id';
    // protected $keyType = 'string';

    // 顧客IDを取得する
    public static function getCustomerName($customer_name)
    {
        $customer = Customer::where('customer_name', $customer_name)->get();

        return $customer;
    }


}
