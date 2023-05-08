<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\WithinChinaDeposit;

class WithinChinaDepositService
{

    public static function getDatetimeWithinChinaDeposit()
    {
        return WithinChinaDeposit::all();
    }

    public static function getWithinChinaDeposit()
    {
        return WithinChinaDeposit::all();
    }
}

