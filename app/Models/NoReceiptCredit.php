<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class NoReceiptCredit extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable =[
        'datetime_no_receipt_credit',
        'no_receipt_credit_creditor',
        'rmb_no_receipt_credit',
        'usd_no_receipt_credit',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getNoReceiptCredit($from, $until)
    {
        $no_receipt_credit = NoReceiptCredit::whereBetween('datetime_no_receipt_credit', [$from, $until])->get();

        return $no_receipt_credit;
    }

    public static function getNoReceiptCreditName($no_receipt_credit_creditor, $from, $until)
    {
        $no_receipt_credit = NoReceiptCredit::where('no_receipt_credit_creditor',$no_receipt_credit_creditor)->whereBetween('datetime_no_receipt_credit', [$from, $until])->get();

        return $no_receipt_credit;
    }



}
