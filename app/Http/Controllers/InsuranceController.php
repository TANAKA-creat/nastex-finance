<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Insurance;

class InsuranceController extends Controller
{
        //index
        public function index() {

        $datetime_insurance = Insurance::all();
        $insurances = Insurance::all();

        return view('index')
        ->with(['datetime_insurance'=>$datetime_insurance])
        ->with(['insurances'=> $insurances]);
    }

        //edit
        public function edit(Insurance $insurance)
        {
            return view('insurances.edit')
            ->with(['insurance' => $insurance]);
        }
    
        //update
        public function update(Insurance $insurance, Request $request) {
    
            $request->validate([
                'datetime_insurance' => 'required',
                'insurance_creditor' => 'required',
                'rmb_insurance' => 'required',
                'usd_insurance' => 'required',
            ],[
                'datetime_insurance.required' => '記録日を記入してください',
                'insurance_creditor.required' => '顧客名を記入してください',
                'rmb_insurance.required' => '人民元(rmb)ない場合は0を記録してください',
                'usd_insurance.required' => '米ドル(usd)ない場合は0を記録してください',
            ]);
            $insurance ->datetime_insurance = $request->datetime_insurance;
            $insurance->insurance_creditor = $request->insurance_creditor;
            $insurance->rmb_insurance = $request->rmb_insurance;
            $insurance->usd_insurance = $request->usd_insurance;
            $insurance->save();
    
            return redirect()
            ->route('insurances.show');
        }
    

    //show
    public function show() {

        $datetime_insurance = Insurance::all();
        $insurances= Insurance::all();
        $insurances = Insurance::sortable()->get();

        return view('insurances.show')
        ->with(['datetime_insurance' => $datetime_insurance])
        ->with(['insurances'=> $insurances]);
    }

    //create
    public function create() {

        return view('insurances.create');
    }

    //store
    public function store(Request $request) {

        $request->validate([
            'datetime_insurance' => 'required',
            'insurance_creditor' => 'required',
            'rmb_insurance' => 'required',
            'usd_insurance' => 'required',
        ],[
            'datetime_insurance.required' => '記録日を記入してください',
            'insurance_creditor.required' => '顧客名を記入してください',
            'rmb_insurance.required' => '人民元(rmb)ない場合は0を記録してください',
            'usd_insurance.required' => '米ドル(usd)ない場合は0を記録してください',
        ]);

        $insurances = new Insurance();
        $insurances ->datetime_insurance = $request->datetime_insurance;
        $insurances->insurance_creditor = $request->insurance_creditor;
        $insurances->rmb_insurance = $request->rmb_insurance;
        $insurances->usd_insurance = $request->usd_insurance;
        $insurances->save();

        return redirect()
        ->route('details.index');
    }

    // test
    public function test(Request $request)
    {
        if(!empty($request['from']) && !empty($request['until'])) {
            $insurances = Insurance::getInsurance($request['from'],$request['until']);
        } else {
            $insurances = Insurance::get();
        }

        return view('insurances.show')
        ->with(['insurances'=> $insurances]);
    }

    // name
    public function name(Request $request)
    {
        if(!empty($request['insurance_creditor']) && !empty($request['from']) && !empty($request['until'])) {
            $insurances = Insurance::getInsuranceName($request['insurance_creditor'], $request['from'],$request['until']);
            } 
            else {
                $insurances = Insurance::get();
            }
            
            return view('insurances.show2')
            ->with(['insurances'=> $insurances]);
        }
        
    //show2
    public function show2() {
        
        $datetime_insurance = Insurance::all();
        $insurances = Insurance::all();
        $insurances = Insurance::sortable()->get();
        
        
        return view('insurances.show2')
        ->with(['datetime_insurance' => $datetime_insurance])
        ->with(['insurances'=> $insurances]);
    }
    

    // destroy
    public function destroy(Insurance $insurance)
    {
        $insurance->delete();

        return to_route('details.index');
    }
    

}
