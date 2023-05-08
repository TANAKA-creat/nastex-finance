<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\OtherDeposit;

class OtherDepositService
{

    public static function getDatetimeOtherDeposit()
    {
        return OtherDeposit::all();
    }

    public static function getOtherDeposit()
    {
        return OtherDeposit::all();
    }
}

