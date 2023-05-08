<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Other;

class OtherController extends Controller
{
    //index
    public function index() {

        $datetime_other = Other::all();
        $others = Other::all();

        return view('index')
        ->with(['datetime_other'=>$datetime_other])
        ->with(['others'=> $others]);
    }

        //edit
        public function edit(Other $other)
        {
            return view('others.edit')
            ->with(['other' => $other]);
        }
    
        //update
        public function update(Other $other, Request $request) {
    
            $request->validate([
                'datetime_other' => 'required',
                'other_creditor' => 'required',
                'rmb_other' => 'required',
                'usd_other' => 'required',
            ],[
                'datetime_other.required' => '記録日を記入してください',
                'other_creditor.required' => '顧客名を記入してください',
                'rmb_other.required' => '人民元(rmb)ない場合は0を記録してください',
                'usd_other.required' => '米ドル(usd)ない場合は0を記録してください',
            ]);
            $other ->datetime_other = $request->datetime_other;
            $other->other_creditor = $request->other_creditor;
            $other->rmb_other = $request->rmb_other;
            $other->usd_other = $request->usd_other;
            $other->save();
    
            return redirect()
            ->route('others.show');
        }
    

    //show
    public function show() {

        $datetime_other = Other::all();
        $others= Other::all();
        $others = Other::sortable()->get();

        return view('others.show')
        ->with(['datetime_other' => $datetime_other])
        ->with(['others'=> $others]);
    }

    //create
    public function create() {

        return view('others.create');
    }

    //store
    public function store(Request $request) {

        $request->validate([
            'datetime_other' => 'required',
            'other_creditor' => 'required',
            'rmb_other' => 'required',
            'usd_other' => 'required',
        ],[
            'datetime_other.required' => '記録日を記入してください',
            'other_creditor.required' => '顧客名を記入してください',
            'rmb_other.required' => '人民元(rmb)ない場合は0を記録してください',
            'usd_other.required' => '米ドル(usd)ない場合は0を記録してください',
        ]);

        $others = new Other();
        $others ->datetime_other = $request->datetime_other;
        $others->other_creditor = $request->other_creditor;
        $others->rmb_other = $request->rmb_other;
        $others->usd_other = $request->usd_other;
        $others->save();

        return redirect()
        ->route('details.index');
    }

    // test
    public function test(Request $request)
    {
        if(!empty($request['from']) && !empty($request['until'])) {
            $others = Other::getOther($request['from'],$request['until']);
        } else {
            $others = Other::get();
        }

        return view('others.show')
        ->with(['others'=> $others]);
    }

    // name
    public function name(Request $request)
    {
        if(!empty($request['other_creditor']) && !empty($request['from']) && !empty($request['until'])) {
            $others = Other::getOtherName($request['other_creditor'], $request['from'],$request['until']);
            } 
            else {
                $others = Other::get();
            }
            
            return view('others.show2')
            ->with(['others'=> $others]);
        }
        
    //show2
    public function show2() {
        
        $datetime_other = Other::all();
        $others = Other::all();
        $others = Other::sortable()->get();
        
        return view('others.show2')
        ->with(['datetime_other' => $datetime_other])
        ->with(['others'=> $others]);
    }
    
    // destroy
    public function destroy(Other $other)
    {
        $other->delete();

        return to_route('details.index');
    }
    
    
}
