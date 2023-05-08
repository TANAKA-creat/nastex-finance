<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\OtherDeposit;

class OtherDepositController extends Controller
{
    //index
    public function index() {

        $datetime_other_deposit = OtherDeposit::all();
        $other_deposits = OtherDeposit::all();
  
  
       return view('index')
        ->with(['datetime_other_deposit'=>$datetime_other_deposit])
        ->with(['other_deposits'=> $other_deposits]);
   }
  
   //edit
   public function edit(OtherDeposit $other_deposit)
   {
       return view('other_deposits.edit')
        ->with(['other_deposit' => $other_deposit]);
   }
  
   //update
   public function update(OtherDeposit $other_deposit, Request $request) {
  
       $request->validate([
           'datetime_other_deposit' => 'required',
           'other_deposit_customer' => 'required',
           'rmb_other_deposit' => 'required',
           'usd_other_deposit' => 'required',
       ],[
           'datetime_other_deposit.required' => '記録日を記入してください',
           'other_deposit_customer.required' => '顧客名を記入してください',
           'rmb_other_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_other_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
       $other_deposit->datetime_other_deposit = $request->datetime_other_deposit;
       $other_deposit->other_deposit_customer = $request->other_deposit_customer;
       $other_deposit->rmb_other_deposit = $request->rmb_other_deposit;
       $other_deposit->usd_other_deposit = $request->usd_other_deposit;
       $other_deposit->save();
  
       return redirect()
        ->route('other_deposits.show');
   }
  
   //show
   public function show() {
  
       $datetime_other_deposit = OtherDeposit::all();
       $other_deposits = OtherDeposit::all();
       $other_deposits = OtherDeposit::sortable()->get();
  
       return view('other_deposits.show')
        ->with(['datetime_other_deposit' => $datetime_other_deposit])
        ->with(['other_deposits'=> $other_deposits]);
   }
  
    //create
    public function create() {
  
       return view('other_deposits.create');
   }
  
   //store
   public function store(Request $request) {
  
       $request->validate([
           'datetime_other_deposit' => 'required',
           'other_deposit_customer' => 'required',
           'rmb_other_deposit' => 'required',
           'usd_other_deposit' => 'required',
       ],[
           'datetime_other_deposit.required' => '記録日を記入してください',
           'other_deposit_customer.required' => '顧客名を記入してください',
           'rmb_other_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_other_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
  
       $other_deposits = new OtherDeposit();
       $other_deposits->datetime_other_deposit = $request->datetime_other_deposit;
       $other_deposits->other_deposit_customer = $request->other_deposit_customer;
       $other_deposits->rmb_other_deposit = $request->rmb_other_deposit;
       $other_deposits->usd_other_deposit = $request->usd_other_deposit;
       $other_deposits->save();
  
       return redirect()
        ->route('details.index');
  }

  // test
  public function test(Request $request)
  {
      if(!empty($request['from']) && !empty($request['until'])) {
          $other_deposits = OtherDeposit::getOtherDeposit($request['from'],$request['until']);
      } else {
          $other_deposits = OtherDeposit::get();
      }

      return view('other_deposits.show')
      ->with(['other_deposits'=> $other_deposits]);
  }

  // name
    public function name(Request $request)
    {
        if(!empty($request['other_deposit_customer']) && !empty($request['from']) && !empty($request['until'])) {
            $other_deposits = OtherDeposit::getOtherDepositName($request['other_deposit_customer'], $request['from'],$request['until']);
        } 
        else {
            $other_deposits = OtherDeposit::get();
        }

        return view('other_deposits.show2')
        ->with(['other_deposits'=> $other_deposits]);
    }

    //show2
    public function show2() {

        $datetime_other_deposit = OtherDeposit::all();
        $other_deposits = OtherDeposit::all();
        $other_deposits = OtherDeposit::sortable()->get();


        return view('other_deposits.show2')
        ->with(['datetime_other_deposit' => $datetime_other_deposit])
        ->with(['other_deposits'=> $other_deposits]);
    }


      // destroy
      public function destroy(OtherDeposit $other_deposit)
      {
          $other_deposit->delete();
  
          return to_route('details.index');
      }
  
}
