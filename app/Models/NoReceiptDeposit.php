<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class NoReceiptDeposit extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable = [
        'datetime_no_receipt_deposit',
        'no_receipt_deposit_customer_id',
        'no_receipt_deposit_customer',
        'rmb_no_receipt_deposit',
        'usd_no_receipt_deposit',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getNoReceiptDeposit($from, $until)
    {
        $no_receipt_deposit = NoReceiptDeposit::whereBetween('datetime_no_receipt_deposit', [$from, $until])->get();

        return $no_receipt_deposit;
    }

    public function customer2()
    {
        return $this->belongsTo('App\Models\Customer2');
    }

    public static function getNoReceiptDepositName($no_receipt_deposit_customer, $from, $until)
    {
        $no_receipt_deposit = NoReceiptDeposit::where('no_receipt_deposit_customer',$no_receipt_deposit_customer)->whereBetween('datetime_no_receipt_deposit', [$from, $until])->get();

        return $no_receipt_deposit;
    }



}
