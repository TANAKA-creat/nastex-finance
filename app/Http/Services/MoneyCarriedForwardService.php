<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\MoneyCarriedForward;

class MoneyCarriedForwardService
{

    public static function getDatetimeMoneyCarriedForward()
    {
        return MoneyCarriedForward::all();
    }

    public static function getMoneyCarriedForward()
    {
        return MoneyCarriedForward::all();
    }
}

