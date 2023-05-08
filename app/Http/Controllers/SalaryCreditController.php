<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\SalaryCredit;

class SalaryCreditController extends Controller
{
       //index
       public function index() {

        $datetime_salary_credit = SalaryCredit::all();
        $salary_credits = SalaryCredit::all();

       return view('index')
        ->with(['datetime_salary_credit'=>$datetime_salary_credit])
        ->with(['salary_credits'=> $salary_credits]);
   }

       //edit
       public function edit(SalaryCredit $salary_credit)
       {
           return view('salary_credits.edit')
            ->with(['salary_credit' => $salary_credit]);
       }
   
       //update
       public function update(SalaryCredit $salary_credit, Request $request) {
   
           $request->validate([
               'datetime_salary_credit' => 'required',
               'salary_creditor' => 'required',
               'rmb_salary_credit' => 'required',
               'usd_salary_credit' => 'required',
           ],[
               'datetime_salary_credit.required' => '記録日を記入してください',
               'salary_creditor.required' => '顧客名を記入してください',
               'rmb_salary_credit.required' => '人民元(rmb)ない場合は0を記録してください',
               'usd_salary_credit.required' => '米ドル(usd)ない場合は0を記録してください',
           ]);
           $salary_credit ->datetime_salary_credit = $request->datetime_salary_credit;
           $salary_credit->salary_creditor = $request->salary_creditor;
           $salary_credit->rmb_salary_credit = $request->rmb_salary_credit;
           $salary_credit->usd_salary_credit = $request->usd_salary_credit;
           $salary_credit->save();
   
           return redirect()
            ->route('salary_credits.show');
       }
   

   //show
   public function show() {

       $datetime_salary_credit = SalaryCredit::all();
       $salary_credits= SalaryCredit::all();
       $salary_credits = SalaryCredit::sortable()->get();

       return view('salary_credits.show')
        ->with(['datetime_salary_credit' => $datetime_salary_credit])
        ->with(['salary_credits'=> $salary_credits]);
   }

    //create
    public function create() {

       return view('salary_credits.create');
   }

   //store
   public function store(Request $request) {

       $request->validate([
           'datetime_salary_credit' => 'required',
           'salary_creditor' => 'required',
           'rmb_salary_credit' => 'required',
           'usd_salary_credit' => 'required',
       ],[
           'datetime_salary_credit.required' => '記録日を記入してください',
           'salary_creditor.required' => '顧客名を記入してください',
           'rmb_salary_credit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_salary_credit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);

       $salary_credits = new SalaryCredit();
       $salary_credits ->datetime_salary_credit = $request->datetime_salary_credit;
       $salary_credits->salary_creditor = $request->salary_creditor;
       $salary_credits->rmb_salary_credit = $request->rmb_salary_credit;
       $salary_credits->usd_salary_credit = $request->usd_salary_credit;
       $salary_credits->save();

       return redirect()
        ->route('details.index');
   }

   // test
   public function test(Request $request)
   {
       if(!empty($request['from']) && !empty($request['until'])) {
           $salary_credits = SalaryCredit::getSalaryCredit($request['from'],$request['until']);
       } else {
           $salary_credits = SalaryCredit::get();
       }

       return view('salary_credits.show')
       ->with(['salary_credits'=> $salary_credits]);
   }

    // name
    public function name(Request $request)
    {
        if(!empty($request['salary_creditor']) && !empty($request['from']) && !empty($request['until'])) {
            $salary_credits = SalaryCredit::getSalaryCreditName($request['salary_creditor'], $request['from'],$request['until']);
            } 
            else {
                $salary_credits = SalaryCredit::get();
            }
            
            return view('salary_credits.show2')
            ->with(['salary_credits'=> $salary_credits]);
        }
        
    //show2
    public function show2() {
        
        $datetime_salary_credit = SalaryCredit::all();
        $salary_credits = SalaryCredit::all();
        $salary_credits = SalaryCredit::sortable()->get();
        
        return view('salary_credits.show2')
        ->with(['datetime_salary_credit' => $datetime_salary_credit])
        ->with(['salary_credits'=> $salary_credits]);
    }
   

       // destroy
       public function destroy(SalaryCredit $salary_credit)
       {
           $salary_credit->delete();
   
           return to_route('details.index');
       }
   


}
