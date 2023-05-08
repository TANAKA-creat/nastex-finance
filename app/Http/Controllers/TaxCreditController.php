<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\TaxCredit;

class TaxCreditController extends Controller
{
    //index
    public function index() {

         $datetime_tax_credit = TaxCredit::all();
         $tax_credits = TaxCredit::all();

        return view('index')
         ->with(['datetime_tax_credit'=>$datetime_tax_credit])
         ->with(['tax_credits'=> $tax_credits]);
    }

        //edit
        public function edit(TaxCredit $tax_credit)
        {
            return view('tax_credits.edit')
             ->with(['tax_credit' => $tax_credit]);
        }
    
        //update
        public function update(TaxCredit $tax_credit, Request $request) {
    
            $request->validate([
                'datetime_tax_credit' => 'required',
                'tax_creditor' => 'required',
                'rmb_tax_credit' => 'required',
                'usd_tax_credit' => 'required',
            ],[
                'datetime_tax_credit.required' => '記録日を記入してください',
                'tax_creditor.required' => '顧客名を記入してください',
                'rmb_tax_credit.required' => '人民元(rmb)ない場合は0を記録してください',
                'usd_tax_credit.required' => '米ドル(usd)ない場合は0を記録してください',
            ]);
            $tax_credit ->datetime_tax_credit = $request->datetime_tax_credit;
            $tax_credit->tax_creditor = $request->tax_creditor;
            $tax_credit->rmb_tax_credit = $request->rmb_tax_credit;
            $tax_credit->usd_tax_credit = $request->usd_tax_credit;
            $tax_credit->save();
    
            return redirect()
             ->route('tax_credits.show');
        }
    

    //show
    public function show() {

        $datetime_tax_credit = TaxCredit::all();
        $tax_credits= TaxCredit::all();
        $tax_credits = TaxCredit::sortable()->get();

        return view('tax_credits.show')
         ->with(['datetime_tax_credit' => $datetime_tax_credit])
         ->with(['tax_credits'=> $tax_credits]);
    }

     //create
     public function create() {

        return view('tax_credits.create');
    }

    //store
    public function store(Request $request) {

        $request->validate([
            'datetime_tax_credit' => 'required',
            'tax_creditor' => 'required',
            'rmb_tax_credit' => 'required',
            'usd_tax_credit' => 'required',
        ],[
            'datetime_tax_credit.required' => '記録日を記入してください',
            'tax_creditor.required' => '顧客名を記入してください',
            'rmb_tax_credit.required' => '人民元(rmb)ない場合は0を記録してください',
            'usd_tax_credit.required' => '米ドル(usd)ない場合は0を記録してください',
        ]);

        $tax_credits = new TaxCredit();
        $tax_credits ->datetime_tax_credit = $request->datetime_tax_credit;
        $tax_credits->tax_creditor = $request->tax_creditor;
        $tax_credits->rmb_tax_credit = $request->rmb_tax_credit;
        $tax_credits->usd_tax_credit = $request->usd_tax_credit;
        $tax_credits->save();

        return redirect()
         ->route('details.index');
    }

    // test
    public function test(Request $request)
    {
        if(!empty($request['from']) && !empty($request['until'])) {
            $tax_credits = TaxCredit::getTaxCredit($request['from'],$request['until']);
        } else {
            $tax_credits = TaxCredit::get();
        }

        return view('tax_credits.show')
        ->with(['tax_credits'=> $tax_credits]);
    }

        // name
        public function name(Request $request)
        {
            if(!empty($request['tax_creditor']) && !empty($request['from']) && !empty($request['until'])) {
                $tax_credits = TaxCredit::getTaxCreditName($request['tax_creditor'], $request['from'],$request['until']);
                } 
                else {
                    $tax_credits = TaxCredit::get();
                }
                
                return view('tax_credits.show2')
                ->with(['tax_credits'=> $tax_credits]);
            }
            
        //show2
        public function show2() {
            
            $datetime_tax_credit = TaxCredit::all();
            $tax_credits = TaxCredit::all();
            $tax_credits = TaxCredit::sortable()->get();
            
            return view('tax_credits.show2')
            ->with(['datetime_tax_credit' => $datetime_tax_credit])
            ->with(['tax_credits'=> $tax_credits]);
        }
    

    // destroy
    public function destroy(TaxCredit $tax_credit)
    {
        $tax_credit->delete();

        return to_route('details.index');
    }
    

}



