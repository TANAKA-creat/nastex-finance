<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\NoReceiptDeposit;

class NoReceiptDepositController extends Controller
{
    //index
    public function index() {

        $datetime_no_receipt_deposit = NoReceiptDeposit::all();
        $no_receipt_deposits = NoReceiptDeposit::all();
  
  
       return view('index')
        ->with(['datetime_no_receipt_deposit'=>$datetime_no_receipt_deposit])
        ->with(['no_receipt_deposits'=> $no_receipt_deposits]);
   }
  
   //edit
   public function edit(NoReceiptDeposit $no_receipt_deposit)
   {
       return view('no_receipt_deposits.edit')
        ->with(['no_receipt_deposit' => $no_receipt_deposit]);
   }
  
   //update
   public function update(NoReceiptDeposit $no_receipt_deposit, Request $request) {
  
       $request->validate([
           'datetime_no_receipt_deposit' => 'required',
           'no_receipt_deposit_customer_id' => 'required',
           'no_receipt_deposit_customer' => 'required',
           'rmb_no_receipt_deposit' => 'required',
           'usd_no_receipt_deposit' => 'required',
       ],[
           'datetime_no_receipt_deposit.required' => '記録日を記入してください',
           'no_receipt_deposit_customer_id.required' => '顧客IDを記入してください',
           'no_receipt_deposit_customer.required' => '顧客名を記入してください',
           'rmb_no_receipt_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_no_receipt_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
       $no_receipt_deposit->datetime_no_receipt_deposit = $request->datetime_no_receipt_deposit;
       $no_receipt_deposit->no_receipt_deposit_customer_id = $request->no_receipt_deposit_customer_id;
       $no_receipt_deposit->no_receipt_deposit_customer = $request->no_receipt_deposit_customer;
       $no_receipt_deposit->rmb_no_receipt_deposit = $request->rmb_no_receipt_deposit;
       $no_receipt_deposit->usd_no_receipt_deposit = $request->usd_no_receipt_deposit;
       $no_receipt_deposit->update();
  
       return redirect()
        ->route('no_receipt_deposits.show');
   }
  
   //show
   public function show() {
  
       $datetime_no_receipt_deposit = NoReceiptDeposit::all();
       $no_receipt_deposits = NoReceiptDeposit::all();
       $no_receipt_deposits = NoReceiptDeposit::sortable()->get();
  
       return view('no_receipt_deposits.show')
        ->with(['datetime_no_receipt_deposit' => $datetime_no_receipt_deposit])
        ->with(['no_receipt_deposits'=> $no_receipt_deposits]);
   }
  
    //create
    public function create() {
  
       return view('no_receipt_deposits.create');
   }
  
   //store
   public function store(Request $request) {
  
       $request->validate([
           'datetime_no_receipt_deposit' => 'required',
           'no_receipt_deposit_customer_id' => 'required',
           'no_receipt_deposit_customer' => 'required',
           'rmb_no_receipt_deposit' => 'required',
           'usd_no_receipt_deposit' => 'required',
       ],[
           'datetime_no_receipt_deposit.required' => '記録日を記入してください',
           'no_receipt_deposit_customer_id.required' => '顧客IDを記入してください',
           'no_receipt_deposit_customer.required' => '顧客名を記入してください',
           'rmb_no_receipt_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_no_receipt_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
  
       $no_receipt_deposits = new NoReceiptDeposit();
       $no_receipt_deposits->datetime_no_receipt_deposit = $request->datetime_no_receipt_deposit;
       $no_receipt_deposits->no_receipt_deposit_customer_id = $request->no_receipt_deposit_customer_id;
       $no_receipt_deposits->no_receipt_deposit_customer = $request->no_receipt_deposit_customer;
       $no_receipt_deposits->rmb_no_receipt_deposit = $request->rmb_no_receipt_deposit;
       $no_receipt_deposits->usd_no_receipt_deposit = $request->usd_no_receipt_deposit;
       $no_receipt_deposits->save();
  
       return redirect()
        ->route('details.index');
  }

  public function test(Request $request)
  {
      if(!empty($request['from']) && !empty($request['until'])) {
          $no_receipt_deposits = NoReceiptDeposit::getNoReceiptDeposit($request['from'],$request['until']);
      } else {
          $no_receipt_deposits = NoReceiptDeposit::get();
      }

      return view('no_receipt_deposits.show')
      ->with(['no_receipt_deposits'=> $no_receipt_deposits]);
  }

    // destroy
    public function destroy(NoReceiptDeposit $no_receipt_deposit)
    {
        $no_receipt_deposit->delete();

        return to_route('details.index');
    }

    // name
    public function name(Request $request)
        {
        if(!empty($request['no_receipt_deposit_customer']) && !empty($request['from']) && !empty($request['until'])) {
            $no_receipt_deposits = NoReceiptDeposit::getNoReceiptDepositName($request['no_receipt_deposit_customer'], $request['from'],$request['until']);
        } 
            else {
            $no_receipt_deposits = NoReceiptDeposit::get();
        }

        return view('no_receipt_deposits.show2')
        ->with(['no_receipt_deposits'=> $no_receipt_deposits]);
        }

    //show2
    public function show2() {

        $datetime_no_receipt_deposit = NoReceiptDeposit::all();
        $no_receipt_deposits = NoReceiptDeposit::all();
        $no_receipt_deposits = NoReceiptDeposit::sortable()->get();


        return view('no_receipt_deposits.show2')
            ->with(['datetime_no_receipt_deposit' => $datetime_no_receipt_deposit])
            ->with(['no_receipt_deposits'=> $no_receipt_deposits]);
    }

  

}
