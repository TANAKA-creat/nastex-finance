<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\MoneyCarriedForward;
use App\Http\Requests\StoreMoneyCarriedForwardRequest;
use App\Http\Requests\UpdateMoneyCarriedForwardRequest;

class MoneyCarriedForwardController extends Controller
{
    //index
    public function index() {

        $datetime_money_carried_forward = MoneyCarriedForward::all();
        $money_carried_forwards = MoneyCarriedForward::all();
  
  
       return view('index')
        ->with(['datetime_money_carried_forward'=>$datetime_money_carried_forward])
        ->with(['money_carried_forwards'=> $money_carried_forwards]);
   }
  
   //edit
   public function edit(MoneyCarriedForward $money_carried_forward)
   {
       return view('money_carried_forwards.edit')
        ->with(['money_carried_forward' => $money_carried_forward]);
   }
  
   //update
   public function update(MoneyCarriedForward $money_carried_forward, Request $request) {
  
       $request->validate([
           'datetime_money_carried_forward' => 'required',
           'money_carried_forward_customer' => 'required',
           'rmb_money_carried_forward' => 'required',
           'usd_money_carried_forward' => 'required',
       ],[
           'datetime_money_carried_forward.required' => '記録日を記入してください',
           'money_carried_forward_customer.required' => '顧客名を記入してください',
           'rmb_money_carried_forward.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_money_carried_forward.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
       $money_carried_forward->datetime_money_carried_forward = $request->datetime_money_carried_forward;
       $money_carried_forward->money_carried_forward_customer = $request->money_carried_forward_customer;
       $money_carried_forward->rmb_money_carried_forward = $request->rmb_money_carried_forward;
       $money_carried_forward->usd_money_carried_forward = $request->usd_money_carried_forward;
       $money_carried_forward->save();
  
       return redirect()
        ->route('details.index');
   }
  
   //show
   public function show() {
  
       $datetime_money_carried_forward = MoneyCarriedForward::all();
       $money_carried_forwards = MoneyCarriedForward::all();
  
       return view('money_carried_forwards.show')
        ->with(['datetime_money_carried_forward' => $datetime_money_carried_forward])
        ->with(['money_carried_forwards'=> $money_carried_forwards]);
   }
  
    //create
    public function create() {
  
       return view('money_carried_forwards.create');
   }
  
   //store
   public function store(Request $request) {
  
       $request->validate([
           'datetime_money_carried_forward' => 'required',
           'money_carried_forward_customer' => 'required',
           'rmb_money_carried_forward' => 'required',
           'usd_money_carried_forward' => 'required',
       ],[
           'datetime_money_carried_forward.required' => '記録日を記入してください',
           'money_carried_forward_customer.required' => '顧客名を記入してください',
           'rmb_money_carried_forward.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_money_carried_forward.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);
  
       $money_carried_forwards = new MoneyCarriedForward();
       $money_carried_forwards->datetime_money_carried_forward = $request->datetime_money_carried_forward;
       $money_carried_forwards->money_carried_forward_customer = $request->money_carried_forward_customer;
       $money_carried_forwards->rmb_money_carried_forward = $request->rmb_money_carried_forward;
       $money_carried_forwards->usd_money_carried_forward = $request->usd_money_carried_forward;
       $money_carried_forwards->save();
  
       return redirect()
        ->route('details.index');
  }

    // destroy
    public function destroy(MoneyCarriedForward $money_carried_forward)
    {
        $money_carried_forward->delete();

        return to_route('details.index');
    }
}
