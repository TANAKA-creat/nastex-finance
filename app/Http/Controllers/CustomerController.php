<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Customer;
use App\Models\Customer2;
use App\Models\WithinChinaDeposit;

use App\Http\Services\Customer2Service;

class CustomerController extends Controller
{
    // // add 中國顧客情報追記ページ
    public function add ()
    {
        return view('customers.add');
    }

     // add_customer
    public function add_customer(Request $request) {

        $request->validate([
            'customer_name' => 'required',
            'customer_id' => 'required',
        ],[
            'customer_name.required' => '顧客名を記入してください',
            'customer_id.required' => '顧客番号（ID）を記入してください',
        ]);

        $customers = new Customer();
        $customers->customer_name = $request->customer_name;
        $customers->customer_id = $request->customer_id;
        $customers->save();
        
        return redirect()
        ->route('customers.show');
    }

        //edit
        public function edit(Customer $customer)
        {
            return view('customers.edit')
            ->with(['customer' => $customer]);
        }

        //update
        public function update(Customer $customer, Request $request) {

            $request->validate([
                'customer_name' => 'required',
                'customer_id' => 'required',
            ],[
                'customer_name.required' => '顧客名を記録してください',
                'customer_id.required' => '顧客IDを記録してください',
            ]);
            $customer->customer_name = $request->customer_name;
            $customer->customer_id = $request->customer_id;

            $customer->update();

            return redirect()
            ->route('customers.show');
        }

        //show
        public function show() {

            $customers = Customer::all();
            $customers = Customer::sortable()->get();
            $customer2s = Customer2::all();
            $customer2s = Customer2::sortable()->get();

            $customer2s = Customer2Service::getCustomer2();

            return view('customers.show')
            ->with(['customers'=> $customers])
            ->with(['customer2s'=>$customer2s]);

        }

        // destroy
        public function destroy(Customer $customer)
        {
            $customer->delete();

            // return to_route('details.index');
            return back();
        }

        public function name(Request $request)
        {
            if (!empty($request['customer_name'])) {
                $customers = Customer::getCustomerName($request['customer_name']);
            } else {
                $customers = Customer::get();
            }
    
            return view('customers.show')
                ->with(['customers' => $customers]);
        }
    

    }
