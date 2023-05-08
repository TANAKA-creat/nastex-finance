<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\MiscellaneousExpense;

class MiscellaneousExpenseController extends Controller
{
        //index
        public function index() {

            $datetime_miscellaneous_expense = MiscellaneousExpense::all();
            $miscellaneous_expenses = MiscellaneousExpense::all();

            return view('index')
            ->with(['datetime_miscellaneous_expense'=>$datetime_miscellaneous_expense])
            ->with(['miscellaneous_expenses'=> $miscellaneous_expenses]);
        }

            //edit
            public function edit(MiscellaneousExpense $miscellaneous_expense)
            {
                return view('miscellaneous_expenses.edit')
                ->with(['miscellaneous_expense' => $miscellaneous_expense]);
            }
        
            //update
            public function update(MiscellaneousExpense $miscellaneous_expense, Request $request) {
        
                $request->validate([
                    'datetime_miscellaneous_expense' => 'required',
                    'miscellaneous_expense_creditor' => 'required',
                    'rmb_miscellaneous_expense' => 'required',
                    'usd_miscellaneous_expense' => 'required',
                ],[
                    'miscellaneous_expense_creditor.required' => '顧客名を記入してください',
                    'miscellaneous_expense.required' => '顧客名を記入してください',
                    'rmb_miscellaneous_expense.required' => '人民元(rmb)ない場合は0を記録してください',
                    'usd_miscellaneous_expense.required' => '米ドル(usd)ない場合は0を記録してください',
                ]);
                $miscellaneous_expense ->datetime_miscellaneous_expense = $request->datetime_miscellaneous_expense;
                $miscellaneous_expense->miscellaneous_expense_creditor = $request->miscellaneous_expense_creditor;
                $miscellaneous_expense->rmb_miscellaneous_expense = $request->rmb_miscellaneous_expense;
                $miscellaneous_expense->usd_miscellaneous_expense = $request->usd_miscellaneous_expense;
                $miscellaneous_expense->save();
        
                return redirect()
                ->route('miscellaneous_expenses.show');
            }
        

        //show
        public function show() {

            $datetime_miscellaneous_expense = MiscellaneousExpense::all();
            $miscellaneous_expenses= MiscellaneousExpense::all();
            $miscellaneous_expenses = MiscellaneousExpense::sortable()->get();

            return view('miscellaneous_expenses.show')
            ->with(['datetime_miscellaneous_expense' => $datetime_miscellaneous_expense])
            ->with(['miscellaneous_expenses'=> $miscellaneous_expenses]);
        }

        //create
        public function create() {

            return view('miscellaneous_expenses.create');
        }

        //store
        public function store(Request $request) {

            $request->validate([
                'datetime_miscellaneous_expense' => 'required',
                'miscellaneous_expense_creditor' => 'required',
                'rmb_miscellaneous_expense' => 'required',
                'usd_miscellaneous_expense' => 'required',
            ],[
                'datetime_miscellaneous_expense.required' => '記録日を記入してください',
                'miscellaneous_expense_creditor.required' => '顧客名を記入してください',
                'rmb_miscellaneous_expense.required' => '人民元(rmb)ない場合は0を記録してください',
                'usd_miscellaneous_expense.required' => '米ドル(usd)ない場合は0を記録してください',
            ]);

            $miscellaneous_expenses = new MiscellaneousExpense();
            $miscellaneous_expenses ->datetime_miscellaneous_expense = $request->datetime_miscellaneous_expense;
            $miscellaneous_expenses->miscellaneous_expense_creditor = $request->miscellaneous_expense_creditor;
            $miscellaneous_expenses->rmb_miscellaneous_expense = $request->rmb_miscellaneous_expense;
            $miscellaneous_expenses->usd_miscellaneous_expense = $request->usd_miscellaneous_expense;
            $miscellaneous_expenses->save();

            return redirect()
            ->route('details.index');
        }

        public function test(Request $request)
        {
            if(!empty($request['from']) && !empty($request['until'])) {
                $miscellaneous_expenses = MiscellaneousExpense::getMiscellaneousExpense($request['from'],$request['until']);
            } else {
                $miscellaneous_expenses = MiscellaneousExpense::get();
            }
    
            return view('miscellaneous_expenses.show')
            ->with(['miscellaneous_expenses'=> $miscellaneous_expenses]);
        }

        // name
        public function name(Request $request)
        {
            if(!empty($request['miscellaneous_expense_creditor']) && !empty($request['from']) && !empty($request['until'])) {
                $miscellaneous_expenses = MiscellaneousExpense::getMiscellaneousExpenseName($request['miscellaneous_expense_creditor'], $request['from'],$request['until']);
                } 
                else {
                    $miscellaneous_expenses = MiscellaneousExpense::get();
                }
                
                return view('miscellaneous_expenses.show2')
                ->with(['miscellaneous_expenses'=> $miscellaneous_expenses]);
            }
            
        //show2
        public function show2() {
            
            $datetime_miscellaneous_expense = MiscellaneousExpense::all();
            $miscellaneous_expenses = MiscellaneousExpense::all();
            $miscellaneous_expenses = MiscellaneousExpense::sortable()->get();
            
            return view('miscellaneous_expenses.show2')
            ->with(['datetime_miscellaneous_expense' => $datetime_miscellaneous_expense])
            ->with(['miscellaneous_expenses'=> $miscellaneous_expenses]);
        }


        // destroy
        public function destroy(MiscellaneousExpense $miscellaneous_expense)
        {
            $miscellaneous_expense->delete();

            return to_route('details.index');
        }

        }
