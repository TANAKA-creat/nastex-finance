<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class TaxCredit extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable = [
        'datetime_tax_credit',
        'tax_creditor',
        'rmb_tax_credit',
        'usd_tax_credit',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getTaxCredit($from, $until)
    {
        $tax_credit = TaxCredit::whereBetween('datetime_tax_credit', [$from, $until])->get();

        return $tax_credit;
    }

    public static function getTaxCreditName($tax_creditor, $from, $until)
    {
        $tax_credit = TaxCredit::where('tax_creditor',$tax_creditor)->whereBetween('datetime_tax_credit', [$from, $until])->get();

        return $tax_credit;
    }



}
