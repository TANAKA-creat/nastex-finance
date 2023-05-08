<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\LogisticsCost;

class LogisticsCostService
{

    public static function getDatetimeLogisticsCost()
    {
        return LogisticsCost::all();
    }

    public static function getLogisticsCost()
    {
        return LogisticsCost::all();
    }
}
