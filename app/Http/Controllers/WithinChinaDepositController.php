<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\WithinChinaDeposit;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;

class WithinChinaDepositController extends Controller
{

    //index
    public function index() {

      $datetime_within_china_deposit = WithinChinaDeposit::all();
      $within_china_deposits = WithinChinaDeposit::all();


     return view('index')
      ->with(['datetime_within_china_deposit'=>$datetime_within_china_deposit])
      ->with(['within_china_deposits'=> $within_china_deposits]);
 }

 //edit
 public function edit(WithinChinaDeposit $within_china_deposit)
 {
     return view('within_china_deposits.edit')
      ->with(['within_china_deposit' => $within_china_deposit]);
 }

 //update
 public function update(WithinChinaDeposit $within_china_deposit, Request $request) {

     $request->validate([
         'datetime_within_china_deposit' => 'required',
         'within_china_deposit_customer' => 'required',
         'rmb_within_china_deposit' => 'required',
         'usd_within_china_deposit' => 'required',
         'within_china_deposit_customer_id' => 'required',
     ],[
         'datetime_within_china_deposit.required' => '記録日を記入してください',
         'within_china_deposit_customer.required' => '顧客名を記入してください',
         'rmb_within_china_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
         'usd_within_china_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
         'within_china_deposit_customer_id.required' => '顧客番号（ID）を記入してください',
    ]);
     $within_china_deposit->datetime_within_china_deposit = $request->datetime_within_china_deposit;
     $within_china_deposit->within_china_deposit_customer = $request->within_china_deposit_customer;
     $within_china_deposit->rmb_within_china_deposit = $request->rmb_within_china_deposit;
     $within_china_deposit->usd_within_china_deposit = $request->usd_within_china_deposit;
     $within_china_deposit->within_china_deposit_customer_id = $request->within_china_deposit_customer_id;
     $within_china_deposit->within_china_deposit_customer_name = $request->within_china_deposit_customer_name;

     $within_china_deposit->save();

     return redirect()
      ->route('within_china_deposits.show');
    
 }

 //show
 public function show() {

     $datetime_within_china_deposit = WithinChinaDeposit::all();
     $within_china_deposits = WithinChinaDeposit::all();
     $within_china_deposits = WithinChinaDeposit::sortable()->get();

     return view('within_china_deposits.show')
      ->with(['datetime_within_china_deposit' => $datetime_within_china_deposit])
      ->with(['within_china_deposits'=> $within_china_deposits]);
 }



  //create
  public function create() {

     return view('within_china_deposits.create');
 }

 //store
 public function store(Request $request) {

     $request->validate([
         'datetime_within_china_deposit' => 'required',
         'within_china_deposit_customer_id' => 'required',
         'within_china_deposit_customer' => 'required',
         'rmb_within_china_deposit' => 'required',
         'usd_within_china_deposit' => 'required',
     ],[
         'datetime_within_china_deposit.required' => '記録日を記入してください',
         'within_china_deposit_customer_id.required' => '顧客番号（ID）を記入してください',
         'within_china_deposit_customer.required' => '顧客名を記入してください',
         'rmb_within_china_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
         'usd_within_china_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
     ]);

     $within_china_deposits = new WithinChinaDeposit();
     $within_china_deposits->datetime_within_china_deposit = $request->datetime_within_china_deposit;
     $within_china_deposits->within_china_deposit_customer_id = $request->within_china_deposit_customer_id;
     $within_china_deposits->within_china_deposit_customer = $request->within_china_deposit_customer;
     $within_china_deposits->rmb_within_china_deposit = $request->rmb_within_china_deposit;
     $within_china_deposits->usd_within_china_deposit = $request->usd_within_china_deposit;
     $within_china_deposits->within_china_deposit_customer_name = $request->within_china_deposit_customer_name;
     $within_china_deposits->save();

     return redirect()
      ->route('details.index');
}

// test
public function test(Request $request)
{
    if(!empty($request['from']) && !empty($request['until'])) {
        $within_china_deposits = WithinChinaDeposit::getWithinChinaDeposit($request['from'],$request['until']);
    } 
      else {
        $within_china_deposits = WithinChinaDeposit::get();
    }

    return view('within_china_deposits.show')
    ->with(['within_china_deposits'=> $within_china_deposits]);
}

// name
public function name(Request $request)
{
    if(!empty($request['within_china_deposit_customer']) && !empty($request['from']) && !empty($request['until'])) {
        $within_china_deposits = WithinChinaDeposit::getWithinChinaDepositName($request['within_china_deposit_customer'], $request['from'],$request['until']);
    } 
      else {
        $within_china_deposits = WithinChinaDeposit::get();
    }

    return view('within_china_deposits.show2')
    ->with(['within_china_deposits'=> $within_china_deposits]);
}

  //show2
  public function show2() {

    $datetime_within_china_deposit = WithinChinaDeposit::all();
    $within_china_deposits = WithinChinaDeposit::all();
    $within_china_deposits = WithinChinaDeposit::sortable()->get();


    return view('within_china_deposits.show2')
     ->with(['datetime_within_china_deposit' => $datetime_within_china_deposit])
     ->with(['within_china_deposits'=> $within_china_deposits]);
}

    // // 顧客リストから顧客IDを抽出する
    // // customer_id
    // public function customer_id(Customer $customer, Request $request)
    // {
    // if(!empty($request['within_china_deposit_customer'])){
    //     $customers = Customer::getCustomerId($request['customer_id']);
    // } 
    //   else {
    //     echo '顧客が存在しません';
    // }

    // return view('within_china_deposits.create')
    // ->with(['customers'=> $customers]);
    // }




    // destroy
    public function destroy(WithinChinaDeposit $within_china_deposit)
    {
        $within_china_deposit->delete();

        return to_route('details.index');
    }


}
