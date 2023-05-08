<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\LogisticsCost;

class LogisticsCostController extends Controller
{
           //index
           public function index() {

            $datetime_logistics_cost = LogisticsCost::all();
            $logistics_costs = LogisticsCost::all();
    
           return view('index')
            ->with(['datetime_logistics_cost'=>$datetime_logistics_cost])
            ->with(['logistics_costs'=> $logistics_costs]);
       }
    
           //edit
           public function edit(LogisticsCost $logistics_cost)
           {
               return view('logistics_costs.edit')
                ->with(['logistics_cost' => $logistics_cost]);
           }
       
           //update
           public function update(LogisticsCost $logistics_cost, Request $request) {
       
               $request->validate([
                   'datetime_logistics_cost' => 'required',
                   'logistics_cost_creditor' => 'required',
                   'rmb_logistics_cost' => 'required',
                   'usd_logistics_cost' => 'required',
               ],[
                   'datetime_logistics_cost.required' => '記録日を記入してください',
                   'logistics_cost.required' => '顧客名を記入してください',
                   'rmb_logistics_cost.required' => '人民元(rmb)ない場合は0を記録してください',
                   'usd_logistics_cost.required' => '米ドル(usd)ない場合は0を記録してください',
               ]);
               $logistics_cost ->datetime_logistics_cost = $request->datetime_logistics_cost;
               $logistics_cost->logistics_cost_creditor = $request->logistics_cost_creditor;
               $logistics_cost->rmb_logistics_cost = $request->rmb_logistics_cost;
               $logistics_cost->usd_logistics_cost = $request->usd_logistics_cost;
               $logistics_cost->save();
       
               return redirect()
                ->route('logistics_costs.show');
           }
       
    
       //show
       public function show() {
    
           $datetime_logistics_cost = LogisticsCost::all();
           $logistics_costs= LogisticsCost::all();
           $logistics_costs = LogisticsCost::sortable()->get();
    
           return view('logistics_costs.show')
            ->with(['datetime_logistics_cost' => $datetime_logistics_cost])
            ->with(['logistics_costs'=> $logistics_costs]);
       }
    
        //create
        public function create() {
    
           return view('logistics_costs.create');
       }
    
       //store
       public function store(Request $request) {
    
           $request->validate([
               'datetime_logistics_cost' => 'required',
               'logistics_cost_creditor' => 'required',
               'rmb_logistics_cost' => 'required',
               'usd_logistics_cost' => 'required',
           ],[
               'datetime_logistics_cost.required' => '記録日を記入してください',
               'logistics_cost_creditor.required' => '顧客名を記入してください',
               'rmb_logistics_cost.required' => '人民元(rmb)ない場合は0を記録してください',
               'usd_logistics_cost.required' => '米ドル(usd)ない場合は0を記録してください',
           ]);
    
           $logistics_costs = new LogisticsCost();
           $logistics_costs ->datetime_logistics_cost = $request->datetime_logistics_cost;
           $logistics_costs->logistics_cost_creditor = $request->logistics_cost_creditor;
           $logistics_costs->rmb_logistics_cost = $request->rmb_logistics_cost;
           $logistics_costs->usd_logistics_cost = $request->usd_logistics_cost;
           $logistics_costs->save();
    
           return redirect()
            ->route('details.index');
       }

       public function test(Request $request)
       {
           if(!empty($request['from']) && !empty($request['until'])) {
               $logistics_costs = LogisticsCost::getLogisticsCost($request['from'],$request['until']);
           } else {
               $logistics_costs = LogisticsCost::get();
           }
   
           return view('logistics_costs.show')
           ->with(['logistics_costs'=> $logistics_costs]);
       }

        // name
        public function name(Request $request)
        {
            if(!empty($request['logistics_cost_creditor']) && !empty($request['from']) && !empty($request['until'])) {
                $logistics_costs = LogisticsCost::getLogisticsCostName($request['logistics_cost_creditor'], $request['from'],$request['until']);
                } 
                else {
                    $logistics_costs = LogisticsCost::get();
                }
                
                return view('logistics_costs.show2')
                ->with(['logistics_costs'=> $logistics_costs]);
            }
            
        //show2
        public function show2() {
            
            $datetime_logistics_cost = LogisticsCost::all();
            $logistics_costs = LogisticsCost::all();
            $logistics_costs = LogisticsCost::sortable()->get();
            
            return view('logistics_costs.show2')
            ->with(['datetime_logistics_cost' => $datetime_logistics_cost])
            ->with(['logistics_costs'=> $logistics_costs]);
        }


         // destroy
        public function destroy(LogisticsCost $logistics_cost)
        {
            $logistics_cost->delete();

            return to_route('details.index');
        }

       
}
