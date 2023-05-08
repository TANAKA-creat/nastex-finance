<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\SalaryCredit;

class SalaryCreditService
{

    public static function getDatetimeSalaryCredit()
    {
        return SalaryCredit::all();
    }

    public static function getSalaryCredit()
    {
        return SalaryCredit::all();
    }
}



