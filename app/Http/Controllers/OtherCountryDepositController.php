<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\OtherCountryDeposit;
use Carbon\Carbon;

class OtherCountryDepositController extends Controller
{
    //index
    public function index() {

        $datetime_other_country_deposit = OtherCountryDeposit::all();
        $other_country_deposits = OtherCountryDeposit::all();
  
  
       return view('index')
        ->with(['datetime_other_country_deposit'=>$datetime_other_country_deposit])
        ->with(['other_country_deposits'=> $other_country_deposits]);
   }
  
   //edit
   public function edit(OtherCountryDeposit $other_country_deposit)
   {
       return view('other_country_deposits.edit')
        ->with(['other_country_deposit' => $other_country_deposit]);
   }
  
   //update
   public function update(OtherCountryDeposit $other_country_deposit, Request $request) {
  
       $request->validate([
           'datetime_other_country_deposit' => 'required',
           'other_country_deposit_customer' => 'required',
           'rmb_other_country_deposit' => 'required',
           'usd_other_country_deposit' => 'required',
       ],[
           'datetime_other_country_deposit.required' => '記録日を記入してください',
           'other_country_deposit_customer.required' => '顧客名を記入してください',
           'rmb_other_country_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_other_country_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
       $other_country_deposit->datetime_other_country_deposit = $request->datetime_other_country_deposit;
       $other_country_deposit->other_country_deposit_customer = $request->other_country_deposit_customer;
       $other_country_deposit->rmb_other_country_deposit = $request->rmb_other_country_deposit;
       $other_country_deposit->usd_other_country_deposit = $request->usd_other_country_deposit;
       $other_country_deposit->save();
  
       return redirect()
        ->route('other_country_deposits.show');
   }
  
   //show
   public function show() {
  
       $datetime_other_country_deposit = OtherCountryDeposit::all();
       $other_country_deposits = OtherCountryDeposit::all();
       $other_country_deposits = OtherCountryDeposit::sortable()->get();
  
       return view('other_country_deposits.show')
        ->with(['datetime_other_country_deposit' => $datetime_other_country_deposit])
        ->with(['other_country_deposits'=> $other_country_deposits]);
   }
  
    //create
    public function create() {
  
       return view('other_country_deposits.create');
   }
  
   //store
   public function store(Request $request) {
  
       $request->validate([
           'datetime_other_country_deposit' => 'required',
           'other_country_deposit_customer' => 'required',
           'rmb_other_country_deposit' => 'required',
           'usd_other_country_deposit' => 'required',
       ],[
           'datetime_other_country_deposit.required' => '記録日を記入してください',
           'other_country_deposit_customer.required' => '顧客名を記入してください',
           'rmb_other_country_deposit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_other_country_deposit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
  
       $other_country_deposits = new OtherCountryDeposit();
       $other_country_deposits->datetime_other_country_deposit = $request->datetime_other_country_deposit;
       $other_country_deposits->other_country_deposit_customer = $request->other_country_deposit_customer;
       $other_country_deposits->rmb_other_country_deposit = $request->rmb_other_country_deposit;
       $other_country_deposits->usd_other_country_deposit = $request->usd_other_country_deposit;
       $other_country_deposits->save();
  
       return redirect()
        ->route('details.index');
  }

  public function test(Request $request)
  {
      if(!empty($request['from']) && !empty($request['until'])) {
          $other_country_deposits = OtherCountryDeposit::getOtherCountryDeposit($request['from'],$request['until']);
      } else {
          $other_country_deposits = OtherCountryDeposit::get();
      }

      return view('other_country_deposits.show')
      ->with(['other_country_deposits'=> $other_country_deposits]);
  }

// name
public function name(Request $request)
{
    if(!empty($request['other_country_deposit_customer']) && !empty($request['from']) && !empty($request['until'])) {
        $other_country_deposits = OtherCountryDeposit::getOtherCountryDepositName($request['other_country_deposit_customer'], $request['from'],$request['until']);
    } 
      else {
        $other_country_deposits = OtherCountryDeposit::get();
    }

    return view('other_country_deposits.show2')
    ->with(['other_country_deposits'=> $other_country_deposits]);
}

  //show2
  public function show2() {

    $datetime_other_country_deposit = OtherCountryDeposit::all();
    $other_country_deposits = OtherCountryDeposit::all();
    $other_country_deposits = OtherCountryDeposit::sortable()->get();


    return view('other_country_deposits.show2')
     ->with(['datetime_other_country_deposit' => $datetime_other_country_deposit])
     ->with(['other_country_deposits'=> $other_country_deposits]);
}


      // destroy
      public function destroy(OtherCountryDeposit $other_country_deposit)
      {
          $other_country_deposit->delete();
  
          return to_route('details.index');
      }
  

  }
