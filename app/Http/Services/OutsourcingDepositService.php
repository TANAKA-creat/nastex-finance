<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\OutsourcingDeposit;

class OutsourcingDepositService
{

    public static function getDatetimeOutsourcingDeposit()
    {
        return OutsourcingDeposit::all();
    }

    public static function getOutsourcingDeposit()
    {
        return OutsourcingDeposit::all();
    }
}

