<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\UtilityCost;

class UtilityCostController extends Controller
{
           //index
           public function index() {

            $datetime_utility_cost = UtilityCost::all();
            $utility_costs = UtilityCost::all();
    
           return view('index')
            ->with(['datetime_utility_cost'=>$datetime_utility_cost])
            ->with(['utility_costs'=> $utility_costs]);
       }
    
           //edit
           public function edit(UtilityCost $utility_cost)
           {
               return view('utility_costs.edit')
                ->with(['utility_cost' => $utility_cost]);
           }
       
           //update
           public function update(UtilityCost $utility_cost, Request $request) {
       
               $request->validate([
                   'datetime_utility_cost' => 'required',
                   'utility_cost_creditor' => 'required',
                   'rmb_utility_cost' => 'required',
                   'usd_utility_cost' => 'required',
               ],[
                   'datetime_utility_cost.required' => '記録日を記入してください',
                   'utility_cost.required' => '顧客名を記入してください',
                   'rmb_utility_cost.required' => '人民元(rmb)ない場合は0を記録してください',
                   'usd_utility_cost.required' => '米ドル(usd)ない場合は0を記録してください',
               ]);
               $utility_cost ->datetime_utility_cost = $request->datetime_utility_cost;
               $utility_cost->utility_cost_creditor = $request->utility_cost_creditor;
               $utility_cost->rmb_utility_cost = $request->rmb_utility_cost;
               $utility_cost->usd_utility_cost = $request->usd_utility_cost;
               $utility_cost->save();
       
               return redirect()
                ->route('utility_costs.show');
           }
       
    
       //show
       public function show() {
    
           $datetime_utility_cost = UtilityCost::all();
           $utility_costs= UtilityCost::all();
           $utility_costs = UtilityCost::sortable()->get();
    
           return view('utility_costs.show')
            ->with(['datetime_utility_cost' => $datetime_utility_cost])
            ->with(['utility_costs'=> $utility_costs]);
       }
    
        //create
        public function create() {
    
           return view('utility_costs.create');
       }
    
       //store
       public function store(Request $request) {
    
           $request->validate([
               'datetime_utility_cost' => 'required',
               'utility_cost_creditor' => 'required',
               'rmb_utility_cost' => 'required',
               'usd_utility_cost' => 'required',
           ],[
               'datetime_utility_cost.required' => '記録日を記入してください',
               'utility_cost_creditor.required' => '顧客名を記入してください',
               'rmb_utility_cost.required' => '人民元(rmb)ない場合は0を記録してください',
               'usd_utility_cost.required' => '米ドル(usd)ない場合は0を記録してください',
           ]);
    
           $utility_costs = new UtilityCost();
           $utility_costs ->datetime_utility_cost = $request->datetime_utility_cost;
           $utility_costs->utility_cost_creditor = $request->utility_cost_creditor;
           $utility_costs->rmb_utility_cost = $request->rmb_utility_cost;
           $utility_costs->usd_utility_cost = $request->usd_utility_cost;
           $utility_costs->save();
    
           return redirect()
            ->route('details.index');
       }

       // test
       public function test(Request $request)
       {
           if(!empty($request['from']) && !empty($request['until'])) {
               $utility_costs = UtilityCost::getUtilityCost($request['from'],$request['until']);
           } else {
               $utility_costs = UtilityCost::get();
           }
   
           return view('utility_costs.show')
           ->with(['utility_costs'=> $utility_costs]);
       }

        // name
        public function name(Request $request)
        {
            if(!empty($request['utility_cost_creditor']) && !empty($request['from']) && !empty($request['until'])) {
                $utility_costs = UtilityCost::getUtilityCostName($request['utility_cost_creditor'], $request['from'],$request['until']);
                } 
                else {
                    $utility_costs = UtilityCost::get();
                }
                
                return view('utility_costs.show2')
                ->with(['utility_costs'=> $utility_costs]);
            }
            
        // show2
        public function show2() {
            
            $datetime_utility_cost = UtilityCost::all();
            $utility_costs = UtilityCost::all();
            $utility_costs = UtilityCost::sortable()->get();
            
            return view('utility_costs.show2')
            ->with(['datetime_utility_cost' => $datetime_utility_cost])
            ->with(['utility_costs'=> $utility_costs]);
        }


        // destroy
        public function destroy(UtilityCost $utility_cost)
        {
            $utility_cost->delete();

            return to_route('details.index');
        }

   }
