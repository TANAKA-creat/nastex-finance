<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\Customer2;

class Customer2Service
{

    // public static function getDatetimeAuxiliaryMaterialCredit()
    // {
    //     return AuxiliaryMaterialCredit::all();
    // }

    public static function getCustomer2()
    {
        return Customer2::all();
    }
}
