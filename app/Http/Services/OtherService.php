<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\Other;

class OtherService
{

    public static function getDatetimeOther()
    {
        return Other::all();
    }

    public static function getOther()
    {
        return Other::all();
    }
}
