<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\EntertainmentExpense;

class EntertainmentExpenseService
{

    public static function getDatetimeEntertainmentExpense()
    {
        return EntertainmentExpense::all();
    }

    public static function getEntertainmentExpense()
    {
        return EntertainmentExpense::all();
    }
}
