<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class OutsourcingDeposit extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable = [
        'datetime_outsourcing_deposit',
        'outsourcing_deposit_customer',
        'rmb_outsourcing_deposit',
        'usd_outsourcing_deposit',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getOutsourcingDeposit($from, $until)
    {
        $outsourcing_deposit = OutsourcingDeposit::whereBetween('datetime_outsourcing_deposit', [$from, $until])->get();

        return $outsourcing_deposit;
    }

    public static function getOutsourcingDepositName($outsourcing_deposit_customer, $from, $until)
    {
        $outsourcing_deposit = OutsourcingDeposit::where('outsourcing_deposit_customer',$outsourcing_deposit_customer)->whereBetween('datetime_outsourcing_deposit', [$from, $until])->get();

        return $outsourcing_deposit;
    }



}
