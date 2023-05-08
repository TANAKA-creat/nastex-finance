<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer2;
use App\Models\Customer;



class Customer2Controller extends Controller
{
        // // add 中國顧客情報追記ページ
        public function add ()
        {
            return view('customer2s.add');
        }
    
         // add_customer
        public function add_customer(Request $request) {
    
            $request->validate([
                'customer2_name' => 'required',
                'customer2_id' => 'required',
            ],[
                'customer2_name.required' => '顧客名を記入してください',
                'customer2_id.required' => '顧客番号（ID）を記入してください',
            ]);
    
            $customer2s = new Customer2();
            $customer2s->customer2_name = $request->customer2_name;
            $customer2s->customer2_id = $request->customer2_id;
            $customer2s->save();
            
            return redirect()
            ->route('customer2s.show');
        }
    
            //edit
            public function edit(Customer2 $customer2)
            {
                return view('customer2s.edit')
                ->with(['customer2' => $customer2]);
            }
    
            //update
            public function update(Customer2 $customer2, Request $request) {
    
                $request->validate([
                    'customer2_name' => 'required',
                    'customer2_id' => 'required',
                ],[
                    'customer2_name.required' => '顧客名を記録してください',
                    'customer2_id.required' => '顧客IDを記録してください',
                ]);
                $customer2->customer2_name = $request->customer2_name;
                $customer2->customer2_id = $request->customer2_id;
    
                $customer2->update();
    
                return redirect()
                ->route('customer2s.show');
            }
    
            //show
            public function show() {
    
                $customer2s = Customer2::all();
                $customer2s = Customer2::sortable()->get();
    
                return view('customer2s.show')
                ->with(['customer2s'=> $customer2s]);
            }
    
            // destroy
            public function destroy(Customer2 $customer2)
            {
                $customer2->delete();
    
                // return to_route('details.index');
                return back();
            }

            public function name(Request $request)
            {
                if (!empty($request['customer2_name'])) {
                    $customer2s = Customer2::getCustomer2Name($request['customer2_name']);
                } else {
                    $customer2s = Customer2::get();
                }
        
                return view('customer2s.show')
                    ->with(['customer2s' => $customer2s]);
            }
    
    
    
}
