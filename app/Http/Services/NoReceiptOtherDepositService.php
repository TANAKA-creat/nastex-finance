<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\NoReceiptOtherDeposit;

class NoReceiptOtherDepositService
{

    public static function getDatetimeNoReceiptOtherDeposit()
    {
        return NoReceiptOtherDeposit::all();
    }

    public static function getNoReceiptOtherDeposit()
    {
        return NoReceiptOtherDeposit::all();
    }
}

