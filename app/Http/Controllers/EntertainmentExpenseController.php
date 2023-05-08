<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\EntertainmentExpense;

class EntertainmentExpenseController extends Controller
{
               //index
               public function index() {

                $datetime_entertainment_expense = EntertainmentExpense::all();
                $entertainment_expenses = EntertainmentExpense::all();
        
               return view('index')
                ->with(['datetime_entertainment_expense'=>$datetime_entertainment_expense])
                ->with(['entertainment_expenses'=> $entertainment_expenses]);
           }
        
               //edit
               public function edit(EntertainmentExpense $entertainment_expense)
               {
                   return view('entertainment_expenses.edit')
                    ->with(['entertainment_expense' => $entertainment_expense]);
               }
           
               //update
               public function update(EntertainmentExpense $entertainment_expense, Request $request) {
           
                   $request->validate([
                       'datetime_entertainment_expense' => 'required',
                       'entertainment_expense_creditor' => 'required',
                       'rmb_entertainment_expense' => 'required',
                       'usd_entertainment_expense' => 'required',
                   ],[
                       'datetime_entertainment_expense.required' => '記録日を記入してください',
                       'entertainment_expense.required' => '顧客名を記入してください',
                       'rmb_entertainment_expense.required' => '人民元(rmb)ない場合は0を記録してください',
                       'usd_entertainment_expense.required' => '米ドル(usd)ない場合は0を記録してください',
                   ]);
                   $entertainment_expense ->datetime_entertainment_expense = $request->datetime_entertainment_expense;
                   $entertainment_expense->entertainment_expense_creditor = $request->entertainment_expense_creditor;
                   $entertainment_expense->rmb_entertainment_expense = $request->rmb_entertainment_expense;
                   $entertainment_expense->usd_entertainment_expense = $request->usd_entertainment_expense;
                   $entertainment_expense->update();
           
                   return redirect()
                    ->route('entertainment_expenses.show');
               }
           
        
           //show
           public function show() {
        
               $datetime_entertainment_expense = EntertainmentExpense::all();
               $entertainment_expenses= EntertainmentExpense::all();
               $entertainment_expenses = EntertainmentExpense::sortable()->get();
        
               return view('entertainment_expenses.show')
                ->with(['datetime_entertainment_expense' => $datetime_entertainment_expense])
                ->with(['entertainment_expenses'=> $entertainment_expenses]);
           }
        
            //create
            public function create() {
        
               return view('entertainment_expenses.create');
           }
        
           //store
           public function store(Request $request) {
        
               $request->validate([
                   'datetime_entertainment_expense' => 'required',
                   'entertainment_expense_creditor' => 'required',
                   'rmb_entertainment_expense' => 'required',
                   'usd_entertainment_expense' => 'required',
               ],[
                   'datetime_entertainment_expense.required' => '記録日を記入してください',
                   'entertainment_expense_creditor.required' => '顧客名を記入してください',
                   'rmb_entertainment_expense.required' => '人民元(rmb)ない場合は0を記録してください',
                   'usd_entertainment_expense.required' => '米ドル(usd)ない場合は0を記録してください',
               ]);
        
               $entertainment_expenses = new EntertainmentExpense();
               $entertainment_expenses ->datetime_entertainment_expense = $request->datetime_entertainment_expense;
               $entertainment_expenses->entertainment_expense_creditor = $request->entertainment_expense_creditor;
               $entertainment_expenses->rmb_entertainment_expense = $request->rmb_entertainment_expense;
               $entertainment_expenses->usd_entertainment_expense = $request->usd_entertainment_expense;
               $entertainment_expenses->save();
        
               return redirect()
                ->route('details.index');
           }

           public function test(Request $request)
           {
               if(!empty($request['from']) && !empty($request['until'])) {
                   $entertainment_expenses = EntertainmentExpense::getEntertainmentExpense($request['from'],$request['until']);
               } else {
                   $entertainment_expenses = EntertainmentExpense::get();
               }
       
               return view('entertainment_expenses.show')
               ->with(['entertainment_expenses'=> $entertainment_expenses]);
           }

            // name
            public function name(Request $request)
            {
                if(!empty($request['entertainment_expense_creditor']) && !empty($request['from']) && !empty($request['until'])) {
                    $entertainment_expenses = EntertainmentExpense::getEntertainmentExpenseName($request['entertainment_expense_creditor'], $request['from'],$request['until']);
                    } 
                    else {
                        $entertainment_expenses = EntertainmentExpense::get();
                    }
                    
                    return view('entertainment_expenses.show2')
                    ->with(['entertainment_expenses'=> $entertainment_expenses]);
                }
                
                //show2
                public function show2() {
                    
                    $datetime_entertainment_expense = EntertainmentExpense::all();
                    $entertainment_expenses = EntertainmentExpense::all();
                    $entertainment_expenses = EntertainmentExpense::sortable()->get();
                    
                    
                    return view('entertainment_expenses.show2')
                    ->with(['datetime_entertainment_expense' => $datetime_entertainment_expense])
                    ->with(['entertainment_expenses'=> $entertainment_expenses]);
                }
           

            // destroy
            public function destroy(EntertainmentExpense $entertainment_expense)
            {
                $entertainment_expense->delete();

                return to_route('details.index');
            }

           
}
