<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\NoReceiptCredit;

class NoReceiptCreditService
{

    public static function getDatetimeNoReceiptCredit()
    {
        return NoReceiptCredit::all();
    }

    public static function getNoReceiptCredit()
    {
        return NoReceiptCredit::all();
    }
}
