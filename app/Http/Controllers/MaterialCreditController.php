<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\MaterialCredit;

class MaterialCreditController extends Controller
{
       //index
       public function index() {

        $datetime_material_credit = MaterialCredit::all();
        $material_credits = MaterialCredit::all();

       return view('index')
        ->with(['datetime_material_credit'=>$datetime_material_credit])
        ->with(['material_credits'=> $material_credits]);
   }

       //edit
       public function edit(MaterialCredit $material_credit)
       {
           return view('material_credits.edit')
            ->with(['material_credit' => $material_credit]);
       }
   
       //update
       public function update(MaterialCredit $material_credit, Request $request) {
   
           $request->validate([
               'datetime_material_credit' => 'required',
               'material_creditor' => 'required',
               'rmb_material_credit' => 'required',
               'usd_material_credit' => 'required',
           ],[
               'datetime_material_credit.required' => '記録日を記入してください',
               'material_creditor.required' => '顧客名を記入してください',
               'rmb_material_credit.required' => '人民元(rmb)ない場合は0を記録してください',
               'usd_material_credit.required' => '米ドル(usd)ない場合は0を記録してください',
           ]);
           $material_credit->datetime_material_credit = $request->datetime_material_credit;
           $material_credit->material_creditor = $request->material_creditor;
           $material_credit->rmb_material_credit = $request->rmb_material_credit;
           $material_credit->usd_material_credit = $request->usd_material_credit;
           $material_credit->save();
   
           return redirect()
            ->route('material_credits.show');
       }
   

   //show
   public function show() {

       $datetime_material_credit = MaterialCredit::all();
       $material_credits= MaterialCredit::all();
       $material_credits = MaterialCredit::sortable()->get();

       return view('material_credits.show')
        ->with(['datetime_material_credit' => $datetime_material_credit])
        ->with(['material_credits'=> $material_credits]);
   }

    //create
    public function create() {

       return view('material_credits.create');
   }

   //store
   public function store(Request $request) {

       $request->validate([
           'datetime_material_credit' => 'required',
           'material_creditor' => 'required',
           'rmb_material_credit' => 'required',
           'usd_material_credit' => 'required',
       ],[
           'datetime_material_credit.required' => '記録日を記入してください',
           'material_creditor.required' => '顧客名を記入してください',
           'rmb_material_credit.required' => '人民元(rmb)ない場合は0を記録してください',
           'usd_material_credit.required' => '米ドル(usd)ない場合は0を記録してください',
       ]);

       $material_credits = new MaterialCredit();
       $material_credits ->datetime_material_credit = $request->datetime_material_credit;
       $material_credits->material_creditor = $request->material_creditor;
       $material_credits->rmb_material_credit = $request->rmb_material_credit;
       $material_credits->usd_material_credit = $request->usd_material_credit;
       $material_credits->save();

       return redirect()
        ->route('details.index');
   }

   public function test(Request $request)
   {
       if(!empty($request['from']) && !empty($request['until'])) {
           $material_credits = MaterialCredit::getMaterialCredit($request['from'],$request['until']);
       } else {
           $material_credits = MaterialCredit::get();
       }

       return view('material_credits.show')
       ->with(['material_credits'=> $material_credits]);
   }

    // name
    public function name(Request $request)
    {
        if(!empty($request['material_creditor']) && !empty($request['from']) && !empty($request['until'])) {
            $material_credits = MaterialCredit::getMaterialCreditName($request['material_creditor'], $request['from'],$request['until']);
            } 
            else {
                $material_credits = MaterialCredit::get();
            }
            
            return view('material_credits.show2')
            ->with(['material_credits'=> $material_credits]);
        }
        
    //show2
    public function show2() {
        
        $datetime_material_credit = MaterialCredit::all();
        $material_credits = MaterialCredit::all();
        $material_credits = MaterialCredit::sortable()->get();
        
        return view('material_credits.show2')
        ->with(['datetime_material_credit' => $datetime_material_credit])
        ->with(['material_credits'=> $material_credits]);
    }
   

       // destroy
       public function destroy(MaterialCredit $material_credit)
       {
           $material_credit->delete();
   
           return to_route('details.index');
       }
   

    
}
