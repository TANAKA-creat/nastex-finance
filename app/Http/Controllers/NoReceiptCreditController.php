<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\NoReceiptCredit;

class NoReceiptCreditController extends Controller
{
    //index
    public function index() {

        $datetime_no_receipt_credit = NoReceiptCredit::all();
        $no_receipt_credits = NoReceiptCredit::all();

        return view('index')
        ->with(['datetime_no_receipt_credit'=>$datetime_no_receipt_credit])
        ->with(['no_receipt_credits'=> $no_receipt_credits]);
    }

        //edit
        public function edit(NoReceiptCredit $no_receipt_credit)
        {
            return view('no_receipt_credits.edit')
            ->with(['no_receipt_credit' => $no_receipt_credit]);
        }
    
        //update
        public function update(NoReceiptCredit $no_receipt_credit, Request $request) {
    
            $request->validate([
                'datetime_no_receipt_credit' => 'required',
                'no_receipt_credit_creditor' => 'required',
                'rmb_no_receipt_credit' => 'required',
                'usd_no_receipt_credit' => 'required',
            ],[
                'datetime_no_receipt_credit.required' => '記録日を記入してください',
                'no_receipt_credit_creditor.required' => '顧客名を記入してください',
                'rmb_no_receipt_credit.required' => '人民元(rmb)ない場合は0を記録してください',
                'usd_no_receipt_credit.required' => '米ドル(usd)ない場合は0を記録してください',
            ]);
            $no_receipt_credit ->datetime_no_receipt_credit = $request->datetime_no_receipt_credit;
            $no_receipt_credit->no_receipt_credit_creditor = $request->no_receipt_credit_creditor;
            $no_receipt_credit->rmb_no_receipt_credit = $request->rmb_no_receipt_credit;
            $no_receipt_credit->usd_no_receipt_credit = $request->usd_no_receipt_credit;
            $no_receipt_credit->save();
    
            return redirect()
            ->route('no_receipt_credits.show');
        }
    

    //show
    public function show() {

        $datetime_no_receipt_credit = NoReceiptCredit::all();
        $no_receipt_credits= NoReceiptCredit::all();
        $no_receipt_credits = NoReceiptCredit::sortable()->get();

        return view('no_receipt_credits.show')
        ->with(['datetime_no_receipt_credit' => $datetime_no_receipt_credit])
        ->with(['no_receipt_credits'=> $no_receipt_credits]);
    }

    //create
    public function create() {

        return view('no_receipt_credits.create');
    }

    //store
    public function store(Request $request) {

        $request->validate([
            'datetime_no_receipt_credit' => 'required',
            'no_receipt_credit_creditor' => 'required',
            'rmb_no_receipt_credit' => 'required',
            'usd_no_receipt_credit' => 'required',
        ],[
            'datetime_no_receipt_credit.required' => '記録日を記入してください',
            'no_receipt_credit_creditor.required' => '顧客名を記入してください',
            'rmb_no_receipt_credit.required' => '人民元(rmb)ない場合は0を記録してください',
            'usd_no_receipt_credit.required' => '米ドル(usd)ない場合は0を記録してください',
        ]);

        $no_receipt_credits = new NoReceiptCredit();
        $no_receipt_credits ->datetime_no_receipt_credit = $request->datetime_no_receipt_credit;
        $no_receipt_credits->no_receipt_credit_creditor = $request->no_receipt_credit_creditor;
        $no_receipt_credits->rmb_no_receipt_credit = $request->rmb_no_receipt_credit;
        $no_receipt_credits->usd_no_receipt_credit = $request->usd_no_receipt_credit;
        $no_receipt_credits->save();

        return redirect()
        ->route('details.index');
    }

    public function test(Request $request)
    {
        if(!empty($request['from']) && !empty($request['until'])) {
            $no_receipt_credits = NoReceiptCredit::getNoReceiptCredit($request['from'],$request['until']);
        } else {
            $no_receipt_credits = NoReceiptCredit::get();
        }

        return view('no_receipt_credits.show')
        ->with(['no_receipt_credits'=> $no_receipt_credits]);
    }

    // name
    public function name(Request $request)
    {
        if(!empty($request['no_receipt_credit_creditor']) && !empty($request['from']) && !empty($request['until'])) {
            $no_receipt_credits = NoReceiptCredit::getNoReceiptCreditName($request['no_receipt_credit_creditor'], $request['from'],$request['until']);
            } 
            else {
                $no_receipt_credits = NoReceiptCredit::get();
            }
            
            return view('no_receipt_credits.show2')
            ->with(['no_receipt_credits'=> $no_receipt_credits]);
        }
        
    //show2
    public function show2() {
        
        $datetime_no_receipt_credit = NoReceiptCredit::all();
        $no_receipt_credits = NoReceiptCredit::all();
        $no_receipt_credits = NoReceiptCredit::sortable()->get();
        
        return view('no_receipt_credits.show2')
        ->with(['datetime_no_receipt_credit' => $datetime_no_receipt_credit])
        ->with(['no_receipt_credits'=> $no_receipt_credits]);
    }
    

    // destroy
    public function destroy(NoReceiptCredit $no_receipt_credit)
    {
        $no_receipt_credit->delete();

        return to_route('details.index');
    }
    
}
