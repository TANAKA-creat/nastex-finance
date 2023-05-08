<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\MaterialCredit;

class MaterialCreditService
{

    public static function getDatetimeMaterialCredit()
    {
        return MaterialCredit::all();
    }

    public static function getMaterialCredit()
    {
        return MaterialCredit::all();
    }
}
