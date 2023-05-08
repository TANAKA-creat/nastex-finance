<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\AuxiliaryMaterialCredit;

class AuxiliaryMaterialCreditService
{

    public static function getDatetimeAuxiliaryMaterialCredit()
    {
        return AuxiliaryMaterialCredit::all();
    }

    public static function getAuxiliaryMaterialCredit()
    {
        return AuxiliaryMaterialCredit::all();
    }
}
