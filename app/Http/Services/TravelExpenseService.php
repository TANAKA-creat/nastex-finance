<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\TravelExpense;

class TravelExpenseService
{

    public static function getDatetimeTravelExpense()
    {
        return TravelExpense::all();
    }

    public static function getTravelExpense()
    {
        return TravelExpense::all();
    }
}
