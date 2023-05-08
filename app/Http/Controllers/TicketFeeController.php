<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\TicketFee;

class TicketFeeController extends Controller
{
    //index
    public function index() {

        $datetime_ticket_fee = TicketFee::all();
        $ticket_fees = TicketFee::all();

        return view('index')
        ->with(['datetime_ticket_fee'=>$datetime_ticket_fee])
        ->with(['ticket_fees'=> $ticket_fees]);
    }

        //edit
        public function edit(TicketFee $ticket_fee)
        {
            return view('ticket_fees.edit')
            ->with(['ticket_fee' => $ticket_fee]);
        }
    
        //update
        public function update(TicketFee $ticket_fee, Request $request) {
    
            $request->validate([
                'datetime_ticket_fee' => 'required',
                'ticket_fee_creditor' => 'required',
                'rmb_ticket_fee' => 'required',
                'usd_ticket_fee' => 'required',
            ],[
                'datetime_ticket_fee.required' => '記録日を記入してください',
                'ticket_fee_creditor.required' => '顧客名を記入してください',
                'rmb_ticket_fee.required' => '人民元(rmb)ない場合は0を記録してください',
                'usd_ticket_fee.required' => '米ドル(usd)ない場合は0を記録してください',
            ]);
            $ticket_fee->datetime_ticket_fee = $request->datetime_ticket_fee;
            $ticket_fee->ticket_fee_creditor = $request->ticket_fee_creditor;
            $ticket_fee->rmb_ticket_fee = $request->rmb_ticket_fee;
            $ticket_fee->usd_ticket_fee = $request->usd_ticket_fee;
            $ticket_fee->save();
    
            return redirect()
            ->route('ticket_fees.show');
        }
    

    //show
    public function show() {

        $datetime_ticket_fee = TicketFee::all();
        $ticket_fees= TicketFee::all();

        return view('ticket_fees.show')
        ->with(['datetime_ticket_fee' => $datetime_ticket_fee])
        ->with(['ticket_fees'=> $ticket_fees]);
    }

    //create
    public function create() {

        return view('ticket_fees.create');
    }

    //store
    public function store(Request $request) {

        $request->validate([
            'datetime_ticket_fee' => 'required',
            'ticket_fee_creditor' => 'required',
            'rmb_ticket_fee' => 'required',
            'usd_ticket_fee' => 'required',
        ],[
            'datetime_ticket_fee.required' => '記録日を記入してください',
            'ticket_fee_creditor.required' => '顧客名を記入してください',
            'rmb_ticket_fee.required' => '人民元(rmb)ない場合は0を記録してください',
            'usd_ticket_fee.required' => '米ドル(usd)ない場合は0を記録してください',
        ]);

        $ticket_fees = new TicketFee();
        $ticket_fees ->datetime_ticket_fee = $request->datetime_ticket_fee;
        $ticket_fees->ticket_fee_creditor = $request->ticket_fee_creditor;
        $ticket_fees->rmb_ticket_fee = $request->rmb_ticket_fee;
        $ticket_fees->usd_ticket_fee = $request->usd_ticket_fee;
        $ticket_fees->save();

        return redirect()
        ->route('details.index');
    }

    // test
    public function test(Request $request)
    {
        if(!empty($request['from']) && !empty($request['until'])) {
            $ticket_fees = TicketFee::getTicketFee($request['from'],$request['until']);
        } else {
            $ticket_fees = TicketFee::get();
        }

        return view('ticket_fees.show')
        ->with(['ticket_fees'=> $ticket_fees]);
    }

    // name
    public function name(Request $request)
    {
        if(!empty($request['ticket_fee_creditor']) && !empty($request['from']) && !empty($request['until'])) {
            $ticket_fees = TicketFee::getTicketFeeName($request['ticket_fee_creditor'], $request['from'],$request['until']);
            } 
            else {
                $ticket_fees = TicketFee::get();
            }
            
            return view('ticket_fees.show2')
            ->with(['ticket_fees'=> $ticket_fees]);
        }
        
    //show2
    public function show2() {
        
        $datetime_ticket_fee = TicketFee::all();
        $ticket_fees = TicketFee::all();
        $ticket_fees = TicketFee::sortable()->get();
        
        return view('ticket_fees.show2')
        ->with(['datetime_ticket_fee' => $datetime_ticket_fee])
        ->with(['ticket_fees'=> $ticket_fees]);
    }
    

    // destroy
    public function destroy(TicketFee $ticket_fee)
    {
        $ticket_fee->delete();

        return to_route('details.index');
    }
    
}
