<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class HongkongDeposit extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable = [
        'datetime_hongkong_deposit',
        'hongkong_deposit_customer',
        'rmb_hongkong_deposit',
        'usd_hongkong_deposit',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getHongkongDeposit($from, $until)
    {
        $hongkong_deposit = HongkongDeposit::whereBetween('datetime_hongkong_deposit', [$from, $until])->get();

        return $hongkong_deposit;
    }

    public static function getHongkongDepositName($hongkong_deposit_customer, $from, $until)
    {
        $hongkong_deposit = HongkongDeposit::where('hongkong_deposit_customer',$hongkong_deposit_customer)->whereBetween('datetime_hongkong_deposit', [$from, $until])->get();

        return $hongkong_deposit;
    }




}
