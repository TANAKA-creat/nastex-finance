<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\Insurance;

class InsuranceService
{

    public static function getDatetimeInsurance()
    {
        return Insurance::all();
    }

    public static function getInsurance()
    {
        return Insurance::all();
    }
}

