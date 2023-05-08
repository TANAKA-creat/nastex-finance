<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\TaxCredit;

class TaxCreditService
{

    public static function getDatetimeTaxCredit()
    {
        return TaxCredit::all();
    }

    public static function getTaxCredit()
    {
        return TaxCredit::all();
    }
}



