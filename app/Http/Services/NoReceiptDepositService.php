<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\NoReceiptDeposit;

class NoReceiptDepositService
{

    public static function getDatetimeNoReceiptDeposit()
    {
        return NoReceiptDeposit::all();
    }

    public static function getNoReceiptDeposit()
    {
        return NoReceiptDeposit::all();
    }
}

