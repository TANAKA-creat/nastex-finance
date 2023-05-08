<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\OtherCountryDeposit;

class OtherCountryDepositService
{

    public static function getDatetimeOtherCountryDeposit()
    {
        return OtherCountryDeposit::all();
    }

    public static function getOtherCountryDeposit()
    {
        return OtherCountryDeposit::all();
    }
}

