<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class NoReceiptOtherDeposit extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable = [
        'datetime_no_receipt_other_deposit',
        'no_receipt_other_deposit_customer',
        'rmb_no_receipt_other_deposit',
        'usd_no_receipt_other_deposit',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getNoReceiptOtherDeposit($from, $until)
    {
        $no_receipt_other_deposit = NoReceiptOtherDeposit::whereBetween('datetime_no_receipt_other_deposit', [$from, $until])->get();

        return $no_receipt_other_deposit;
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }

    public static function getNoReceiptOtherDepositName($no_receipt_other_deposit_customer, $from, $until)
    {
        $no_receipt_other_deposit = NoReceiptOtherDeposit::where('no_receipt_other_deposit_customer',$no_receipt_other_deposit_customer)->whereBetween('no_receipt_other_deposit_deposit', [$from, $until])->get();

        return $no_receipt_other_deposit;
    }
   

}
