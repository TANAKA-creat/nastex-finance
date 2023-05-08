<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Customer2 extends Model
{
    use HasFactory;

    use Sortable;

    public $sortable = [
        'customer2_name',
        'customer2_id'
    ];

    protected $fillable = [
        'customer2_name',
        'customer2_id'
    ];

    

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function within_china_deposits()
    {
        return $this->hasMany('App\Models\WithinChinaDeposit');
    }


    // 顧客IDを取得する
    public static function getCustomer2Name($customer2_name)
    {
        $customer2 = Customer2::where('customer2_name', $customer2_name)->get();

        return $customer2;
    }
    
}
