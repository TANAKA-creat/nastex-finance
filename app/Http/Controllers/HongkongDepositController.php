<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\HongkongDeposit;

class HongkongDepositController extends Controller
{
    //index
    public function index() {

        $datetime_hongkong_deposit = HongkongDeposit::all();
        $hongkong_deposits = HongkongDeposit::all();
  
  
       return view('index')
        ->with(['datetime_hongkong_deposit'=>$datetime_hongkong_deposit])
        ->with(['hongkong_deposits'=> $hongkong_deposits]);
   }
  
   //edit
   public function edit(HongkongDeposit $hongkong_deposit)
   {
       return view('hongkong_deposits.edit')
        ->with(['hongkong_deposit' => $hongkong_deposit]);
   }
  
   //update
   public function update(HongkongDeposit $hongkong_deposit, Request $request) {
  
       $request->validate([
           'datetime_hongkong_deposit' => 'required',
           'hongkong_deposit_customer' => 'required',
           'rmb_hongkong_deposit' => 'required',
           'usd_hongkong_deposit' => 'required',
       ],[
           'datetime_hongkong_deposit.required' => '記録日を記入してください',
           'hongkong_deposit_customer.required' => '顧客名を記入してください',
           'rmb_hongkong_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_hongkong_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
       $hongkong_deposit->datetime_hongkong_deposit = $request->datetime_hongkong_deposit;
       $hongkong_deposit->hongkong_deposit_customer = $request->hongkong_deposit_customer;
       $hongkong_deposit->rmb_hongkong_deposit = $request->rmb_hongkong_deposit;
       $hongkong_deposit->usd_hongkong_deposit = $request->usd_hongkong_deposit;
       $hongkong_deposit->save();
  
       return redirect()
        ->route('hongkong_deposits.show');
   }
  
   //show
   public function show() {
  
       $datetime_hongkong_deposit = HongkongDeposit::all();
       $hongkong_deposits = HongkongDeposit::all();
       $hongkong_deposits = HongkongDeposit::sortable()->get();

       return view('hongkong_deposits.show')
        ->with(['datetime_hongkong_deposit' => $datetime_hongkong_deposit])
        ->with(['hongkong_deposits'=> $hongkong_deposits]);
   }
  
    //create
    public function create() {
  
       return view('hongkong_deposits.create');
   }
  
   //store
   public function store(Request $request) {
  
       $request->validate([
           'datetime_hongkong_deposit' => 'required',
           'hongkong_deposit_customer' => 'required',
           'rmb_hongkong_deposit' => 'required',
           'usd_hongkong_deposit' => 'required',
       ],[
           'datetime_hongkong_deposit.required' => '記録日を記入してください',
           'hongkong_deposit_customer.required' => '顧客名を記入してください',
           'rmb_hongkong_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_hongkong_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
  
       $hongkong_deposits = new HongkongDeposit();
       $hongkong_deposits->datetime_hongkong_deposit = $request->datetime_hongkong_deposit;
       $hongkong_deposits->hongkong_deposit_customer = $request->hongkong_deposit_customer;
       $hongkong_deposits->rmb_hongkong_deposit = $request->rmb_hongkong_deposit;
       $hongkong_deposits->usd_hongkong_deposit = $request->usd_hongkong_deposit;
       $hongkong_deposits->save();
  
       return redirect()
        ->route('details.index');
  }

  public function test(Request $request)
  {
      if(!empty($request['from']) && !empty($request['until'])) {
          $hongkong_deposits = HongkongDeposit::getHongkongDeposit($request['from'],$request['until']);
      } else {
          $hongkong_deposits = HongkongDeposit::get();
      }

      return view('hongkong_deposits.show')
      ->with(['hongkong_deposits'=> $hongkong_deposits]);
  }

      // name
      public function name(Request $request)
      {
      if(!empty($request['hongkong_deposit_customer']) && !empty($request['from']) && !empty($request['until'])) {
          $hongkong_deposits = HongkongDeposit::getHongkongDepositName($request['hongkong_deposit_customer'], $request['from'],$request['until']);
      } 
          else {
          $hongkong_deposits = HongkongDeposit::get();
      }
  
      return view('hongkong_deposits.show2')
      ->with(['hongkong_deposits'=> $hongkong_deposits]);
      }
  
      //show2
      public function show2() {
  
      $datetime_hongkong_deposit = HongkongDeposit::all();
      $hongkong_deposits = HongkongDeposit::all();
      $hongkong_deposits = HongkongDeposit::sortable()->get();
  
      return view('hongkong_deposits.show2')
          ->with(['datetime_hongkong_deposit' => $datetime_hongkong_deposit])
          ->with(['hongkong_deposits'=> $hongkong_deposits]);
      }
  

      // destroy
      public function destroy(HongkongDeposit $hongkong_deposit)
      {
          $hongkong_deposit->delete();
  
          return to_route('details.index');
      }
  

}
