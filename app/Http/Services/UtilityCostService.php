<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\UtilityCost;

class UtilityCostService
{

    public static function getDatetimeUtilityCost()
    {
        return UtilityCost::all();
    }

    public static function getUtilityCost()
    {
        return UtilityCost::all();
    }
}

