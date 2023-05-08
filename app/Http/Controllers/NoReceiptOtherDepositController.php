<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\NoReceiptOtherDeposit;


class NoReceiptOtherDepositController extends Controller
{
    //index
    public function index() {

        $datetime_no_receipt_other_deposit = NoReceiptOtherDeposit::all();
        $no_receipt_other_deposits = NoReceiptOtherDeposit::all();
  
  
       return view('index')
        ->with(['datetime_no_receipt_other_deposit'=>$no_receipt_other_deposit])
        ->with(['no_receipt_other_deposits'=> $no_receipt_other_deposits]);
   }
  
   //edit
   public function edit(NoReceiptOtherDeposit $no_receipt_other_deposit)
   {
       return view('no_receipt_other_deposits.edit')
        ->with(['no_receipt_other_deposit' => $no_receipt_other_deposit]);
   }
  
   //update
   public function update(NoReceiptOtherDeposit $no_receipt_other_deposit, Request $request) {
  
       $request->validate([
           'datetime_no_receipt_other_deposit' => 'required',
           'no_receipt_other_deposit_customer' => 'required',
           'rmb_no_receipt_other_deposit' => 'required',
           'usd_no_receipt_other_deposit' => 'required',
       ],[
           'datetime_no_receipt_other_deposit.required' => '記録日を記入してください',
           'no_receipt_other_deposit_customer.required' => '顧客名を記入してください',
           'rmb_no_receipt_other_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_no_receipt_other_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
       $no_receipt_other_deposit->datetime_no_receipt_other_deposit = $request->datetime_no_receipt_other_deposit;
       $no_receipt_other_deposit->no_receipt_other_deposit_customer = $request->no_receipt_other_deposit_customer;
       $no_receipt_other_deposit->rmb_no_receipt_other_deposit = $request->rmb_no_receipt_other_deposit;
       $no_receipt_other_deposit->usd_no_receipt_other_deposit = $request->usd_no_receipt_other_deposit;
       $no_receipt_other_deposit->save();
  
       return redirect()
        ->route('no_receipt_other_deposits.show');
   }
  
   //show
   public function show() {
  
       $datetime_no_receipt_other_deposit = NoReceiptOtherDeposit::all();
       $no_receipt_other_deposits = NoReceiptOtherDeposit::all();
       $no_receipt_other_deposits = NoReceiptOtherDeposit::sortable()->get();
  
       return view('no_receipt_other_deposits.show')
        ->with(['datetime_no_receipt_other_deposit' => $datetime_no_receipt_other_deposit])
        ->with(['no_receipt_other_deposits'=> $no_receipt_other_deposits]);
   }
  
    //create
    public function create() {
  
       return view('no_receipt_other_deposits.create');
   }
  
   //store
   public function store(Request $request) {
  
       $request->validate([
           'datetime_no_receipt_other_deposit' => 'required',
           'no_receipt_other_deposit_customer' => 'required',
           'rmb_no_receipt_other_deposit' => 'required',
           'usd_no_receipt_other_deposit' => 'required',
       ],[
           'datetime_no_receipt_other_deposit.required' => '記録日を記入してください',
           'no_receipt_other_deposit_customer.required' => '顧客名を記入してください',
           'rmb_no_receipt_other_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_no_receipt_other_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
  
       $no_receipt_other_deposits = new NoReceiptOtherDeposit();
       $no_receipt_other_deposits->datetime_no_receipt_other_deposit = $request->datetime_no_receipt_other_deposit;
       $no_receipt_other_deposits->no_receipt_other_deposit_customer = $request->no_receipt_other_deposit_customer;
       $no_receipt_other_deposits->rmb_no_receipt_other_deposit = $request->rmb_no_receipt_other_deposit;
       $no_receipt_other_deposits->usd_no_receipt_other_deposit = $request->usd_no_receipt_other_deposit;
       $no_receipt_other_deposits->save();
  
       return redirect()
        ->route('details.index');
  }

  public function test(Request $request)
  {
      if(!empty($request['from']) && !empty($request['until'])) {
          $no_receipt_other_deposits = NoReceiptOtherDeposit::getNoReceiptOtherDeposit($request['from'],$request['until']);
      } else {
          $no_receipt_other_deposits = NoReceiptOtherDeposit::get();
      }

      return view('no_receipt_other_deposits.show')
      ->with(['no_receipt_other_deposits'=> $no_receipt_other_deposits]);
  }

// name
public function name(Request $request)
{
    if(!empty($request['no_receipt_other_deposit_customer']) && !empty($request['from']) && !empty($request['until'])) {
        $no_receipt_other_deposits = NoReceiptOtherDeposit::getNoReceiptOtherDepositName($request['no_receipt_other_deposit_customer'], $request['from'],$request['until']);
    } 
      else {
        $no_receipt_other_deposits = NoReceiptOtherDeposit::get();
    }

    return view('no_receipt_other_deposits.show2')
    ->with(['no_receipt_other_deposits'=> $no_receipt_other_deposits]);
}

  //show2
  public function show2() {

    $datetime_no_receipt_other_deposit = NoReceiptOtherDeposit::all();
    $no_receipt_other_deposits = NoReceiptOtherDeposit::all();
    $no_receipt_other_deposits = NoReceiptOtherDeposit::sortable()->get();


    return view('no_receipt_other_deposits.show2')
     ->with(['datetime_no_receipt_other_deposit' => $datetime_no_receipt_other_deposit])
     ->with(['no_receipt_other_deposits'=> $no_receipt_other_deposits]);
}

    // destroy
    public function destroy(NoReceiptOtherDeposit $no_receipt_other_deposit)
    {
        $no_receipt_other_deposit->delete();

        return to_route('details.index');
    }
  
}
