<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyCarriedForward extends Model
{
    use HasFactory;

    protected $fillable = [
        'datetime_money_carried_forward',
        'money_carried_forward_customer',
        'rmb_money_carried_forward',
        'usd_money_carried_forward',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

}
