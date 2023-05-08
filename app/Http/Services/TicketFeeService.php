<?php

//2022/10/05samurai山下先生の指導でCreditService.phpを追記する

namespace App\Http\Services;

use App\Models\TicketFee;

class TicketFeeService
{

    public static function getDatetimeTicketFee()
    {
        return TicketFee::all();
    }

    public static function getTicketFee()
    {
        return TicketFee::all();
    }
}
