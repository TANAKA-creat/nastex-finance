<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\MiscellaneousExpense;

class MiscellaneousExpenseService
{

    public static function getDatetimeMiscellaneousExpense()
    {
        return MiscellaneousExpense::all();
    }

    public static function getMiscellaneousExpense()
    {
        return MiscellaneousExpense::all();
    }
}
