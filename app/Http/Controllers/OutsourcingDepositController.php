<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\OutsourcingDeposit;

class OutsourcingDepositController extends Controller
{
    //index
    public function index() {

        $datetime_outsourcing_deposit = OutsourcingDeposit::all();
        $outsourcing_deposits = OutsourcingDeposit::all();
  
  
       return view('index')
        ->with(['datetime_outsourcing_deposit'=>$datetime_outsourcing_deposit])
        ->with(['outsourcing_deposits'=> $outsourcing_deposits]);
   }
  
   //edit
   public function edit(OutsourcingDeposit $outsourcing_deposit)
   {
       return view('outsourcing_deposits.edit')
        ->with(['outsourcing_deposit' => $outsourcing_deposit]);
   }
  
   //update
   public function update(OutsourcingDeposit $outsourcing_deposit, Request $request) {
  
       $request->validate([
           'datetime_outsourcing_deposit' => 'required',
           'outsourcing_deposit_customer' => 'required',
           'rmb_outsourcing_deposit' => 'required',
           'usd_outsourcing_deposit' => 'required',
       ],[
           'datetime_outsourcing_deposit.required' => '記録日を記入してください',
           'outsourcing_deposit_customer.required' => '顧客名を記入してください',
           'rmb_outsourcing_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_outsourcing_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
       $outsourcing_deposit->datetime_outsourcing_deposit = $request->datetime_outsourcing_deposit;
       $outsourcing_deposit->outsourcing_deposit_customer = $request->outsourcing_deposit_customer;
       $outsourcing_deposit->rmb_outsourcing_deposit = $request->rmb_outsourcing_deposit;
       $outsourcing_deposit->usd_outsourcing_deposit = $request->usd_outsourcing_deposit;
       $outsourcing_deposit->update();
  
       return redirect()
        ->route('outsourcing_deposits.show');
   }
  
   //show
   public function show() {
  
       $datetime_outsourcing_deposit = OutsourcingDeposit::all();
       $outsourcing_deposits = OutsourcingDeposit::all();
       $outsourcing_deposits = OutsourcingDeposit::sortable()->get();
  
       return view('outsourcing_deposits.show')
        ->with(['datetime_outsourcing_deposit' => $datetime_outsourcing_deposit])
        ->with(['outsourcing_deposits'=> $outsourcing_deposits]);
   }
  
    //create
    public function create() {
  
       return view('outsourcing_deposits.create');
   }
  
   //store
   public function store(Request $request) {
  
       $request->validate([
           'datetime_outsourcing_deposit' => 'required',
           'outsourcing_deposit_customer' => 'required',
           'rmb_outsourcing_deposit' => 'required',
           'usd_outsourcing_deposit' => 'required',
       ],[
           'datetime_outsourcing_deposit.required' => '記録日を記入してください',
           'outsourcing_deposit_customer.required' => '顧客名を記入してください',
           'rmb_outsourcing_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_outsourcing_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
  
       $outsourcing_deposits = new OutsourcingDeposit();
       $outsourcing_deposits->datetime_outsourcing_deposit = $request->datetime_outsourcing_deposit;
       $outsourcing_deposits->outsourcing_deposit_customer = $request->outsourcing_deposit_customer;
       $outsourcing_deposits->rmb_outsourcing_deposit = $request->rmb_outsourcing_deposit;
       $outsourcing_deposits->usd_outsourcing_deposit = $request->usd_outsourcing_deposit;
       $outsourcing_deposits->save();
  
       return redirect()
        ->route('details.index');
  }

  // test
  public function test(Request $request)
  {
      if(!empty($request['from']) && !empty($request['until'])) {
          $outsourcing_deposits = OutsourcingDeposit::getOutsourcingDeposit($request['from'],$request['until']);
      } else {
          $outsourcing_deposits = OutsourcingDeposit::get();
      }

      return view('outsourcing_deposits.show')
      ->with(['outsourcing_deposits'=> $outsourcing_deposits]);
  }

    // name
    public function name(Request $request)
    {
        if(!empty($request['outsourcing_deposit_customer']) && !empty($request['from']) && !empty($request['until'])) {
            $outsourcing_deposits = OutsourcingDeposit::getOutsourcingDepositName($request['outsourcing_deposit_customer'], $request['from'],$request['until']);
        } 
        else {
            $outsourcing_deposits = OutsourcingDeposit::get();
        }

        return view('outsourcing_deposits.show2')
        ->with(['outsourcing_deposits'=> $outsourcing_deposits]);
    }

    //show2
    public function show2() {

        $datetime_outsourcing_deposit = OutsourcingDeposit::all();
        $outsourcing_deposits = OutsourcingDeposit::all();
        $outsourcing_deposits = OutsourcingDeposit::sortable()->get();

        return view('outsourcing_deposits.show2')
        ->with(['datetime_outsourcing_deposit' => $datetime_outsourcing_deposit])
        ->with(['outsourcing_deposits'=> $outsourcing_deposits]);
    }


      // destroy
      public function destroy(OutsourcingDeposit $outsourcing_deposit)
      {
          $outsourcing_deposit->delete();
  
          return to_route('details.index');
      }
  

}
