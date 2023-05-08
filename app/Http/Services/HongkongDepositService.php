<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\HongkongDeposit;

class HongkongDepositService
{

    public static function getDatetimeHongkongDeposit()
    {
        return HongkongDeposit::all();
    }

    public static function getHongkongDeposit()
    {
        return HongkongDeposit::all();
    }
}

