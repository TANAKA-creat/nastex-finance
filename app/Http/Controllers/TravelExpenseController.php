<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\TravelExpense;

class TravelExpenseController extends Controller
{
        // index
        public function index() {

        $datetime_travel_expense = TravelExpense::all();
        $travel_expenses = TravelExpense::all();

        return view('index')
        ->with(['datetime_travel_expense'=>$datetime_travel_expense])
        ->with(['travel_expenses'=> $travel_expenses]);
    }

        // edit
        public function edit(TravelExpense $travel_expense)
        {
            return view('travel_expenses.edit')
            ->with(['travel_expense' => $travel_expense]);
        }
    
        // update
        public function update(TravelExpense $travel_expense, Request $request) {
    
            $request->validate([
                'datetime_travel_expense' => 'required',
                'travel_expense_creditor' => 'required',
                'rmb_travel_expense' => 'required',
                'usd_travel_expense' => 'required',
            ],[
                'datetime_travel_expense.required' => '記録日を記入してください',
                'travel_expense.required' => '顧客名を記入してください',
                'rmb_travel_expense.required' => '人民元(rmb)ない場合は0を記録してください',
                'usd_travel_expense.required' => '米ドル(usd)ない場合は0を記録してください',
            ]);
            $travel_expense->datetime_travel_expense = $request->datetime_travel_expense;
            $travel_expense->travel_expense_creditor = $request->travel_expense_creditor;
            $travel_expense->rmb_travel_expense = $request->rmb_travel_expense;
            $travel_expense->usd_travel_expense = $request->usd_travel_expense;
            $travel_expense->save();
    
            return redirect()
            ->route('travel_expenses.show');
        }
    

    // show
    public function show() {

        $datetime_travel_expense = TravelExpense::all();
        $travel_expenses= TravelExpense::all();
        $travel_expenses = TravelExpense::sortable()->get();

        return view('travel_expenses.show')
        ->with(['datetime_travel_expense' => $datetime_travel_expense])
        ->with(['travel_expenses'=> $travel_expenses]);
    }

    // create
    public function create() {

        return view('travel_expenses.create');
    }

    // store
    public function store(Request $request) {

        $request->validate([
            'datetime_travel_expense' => 'required',
            'travel_expense_creditor' => 'required',
            'rmb_travel_expense' => 'required',
            'usd_travel_expense' => 'required',
        ],[
            'datetime_travel_expense.required' => '記録日を記入してください',
            'travel_expense_creditor.required' => '顧客名を記入してください',
            'rmb_travel_expense.required' => '人民元(rmb)ない場合は0を記録してください',
            'usd_travel_expense.required' => '米ドル(usd)ない場合は0を記録してください',
        ]);

        $travel_expenses = new TravelExpense();
        $travel_expenses ->datetime_travel_expense = $request->datetime_travel_expense;
        $travel_expenses->travel_expense_creditor = $request->travel_expense_creditor;
        $travel_expenses->rmb_travel_expense = $request->rmb_travel_expense;
        $travel_expenses->usd_travel_expense = $request->usd_travel_expense;
        $travel_expenses->save();

        return redirect()
        ->route('details.index');
    }
    
    // test
    public function test(Request $request)
    {
        if(!empty($request['from']) && !empty($request['until'])) {
            $travel_expenses = TravelExpense::getTravelExpense($request['from'],$request['until']);
        } else {
            $travel_expenses = TravelExpense::get();
        }

        return view('travel_expenses.show')
        ->with(['travel_expenses'=> $travel_expenses]);
    }

    // name
    public function name(Request $request)
    {
        if(!empty($request['travel_expense_creditor']) && !empty($request['from']) && !empty($request['until'])) {
            $travel_expenses = TravelExpense::getTravelExpenseName($request['travel_expense_creditor'], $request['from'],$request['until']);
            } 
            else {
                $travel_expenses = TravelExpense::get();
            }
            
            return view('travel_expenses.show2')
            ->with(['travel_expenses'=> $travel_expenses]);
        }
        
    // show2
    public function show2() {
        
        $datetime_travel_expense = TravelExpense::all();
        $travel_expenses = TravelExpense::all();
        $travel_expenses = TravelExpense::sortable()->get();
        
        return view('travel_expenses.show2')
        ->with(['datetime_travel_expense' => $datetime_travel_expense])
        ->with(['travel_expenses'=> $travel_expenses]);
    }
    

    // destroy
    public function destroy(TravelExpense $travel_expense)
    {
        $travel_expense->delete();

        return to_route('details.index');
    }
    
     
}
