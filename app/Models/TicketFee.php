<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class TicketFee extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable =[
        'datetime_ticket_fee',
        'ticket_fee_creditor',
        'rmb_ticket_fee',
        'usd_ticket_fee',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getTicketFee($from, $until)
    {
        $ticket_fee = TicketFee::whereBetween('datetime_ticket_fee', [$from, $until])->get();

        return $ticket_fee;
    }

    public static function getTicketFeeName($ticket_fee_creditor, $from, $until)
    {
        $ticket_fee = TicketFee::where('ticket_fee_creditor',$ticket_fee_creditor)->whereBetween('datetime_ticket_fee', [$from, $until])->get();

        return $ticket_fee;
    }

}
