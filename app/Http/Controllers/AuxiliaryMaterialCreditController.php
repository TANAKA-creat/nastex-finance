<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;
use App\Models\AuxiliaryMaterialCredit;

class AuxiliaryMaterialCreditController extends Controller
{
    //index
    public function index()
    {

        $datetime_auxiliary_material_credit = AuxiliaryMaterialCredit::all();
        $auxiliary_material_credits = AuxiliaryMaterialCredit::all();

        return view('details.index')
            ->with(['datetime_auxiliary_material_credit' => $datetime_auxiliary_material_credit])
            ->with(['auxiliary_material_credits' => $auxiliary_material_credits]);
    }

    //edit
    public function edit(AuxiliaryMaterialCredit $auxiliary_material_credit)
    {
        return view('auxiliary_material_credits.edit')
            ->with(['auxiliary_material_credit' => $auxiliary_material_credit]);
    }

    //update
    public function update(AuxiliaryMaterialCredit $auxiliary_material_credit, Request $request)
    {

        $request->validate([
            'datetime_auxiliary_material_credit' => 'required',
            'auxiliary_material_credit_creditor' => 'required',
            'rmb_auxiliary_material_credit' => 'required',
            'usd_auxiliary_material_credit' => 'required',
        ], [
            'datetime_auxiliary_material_credit.required' => '記録日を記入してください',
            'auxiliary_material_creditor.required' => '顧客名を記入してください',
            'rmb_auxiliary_material_credit.required' => '人民元(rmb)ない場合は0を記録してください',
            'usd_auxiliary_material_credit.required' => '米ドル(usd)ない場合は0を記録してください',
        ]);
        $auxiliary_material_credit->datetime_auxiliary_material_credit = $request->datetime_auxiliary_material_credit;
        $auxiliary_material_credit->auxiliary_material_credit_creditor = $request->auxiliary_material_credit_creditor;
        $auxiliary_material_credit->rmb_auxiliary_material_credit = $request->rmb_auxiliary_material_credit;
        $auxiliary_material_credit->usd_auxiliary_material_credit = $request->usd_auxiliary_material_credit;
        $auxiliary_material_credit->save();

        return redirect()
            ->route('auxiliary_material_credits.show');
    }


    //show
    public function show()
    {

        $datetime_auxiliary_material_credit = AuxiliaryMaterialCredit::all();
        $auxiliary_material_credits = AuxiliaryMaterialCredit::all();
        $auxiliary_material_credits = AuxiliaryMaterialCredit::sortable()->get();


        return view('auxiliary_material_credits.show')
            ->with(['datetime_auxiliary_material_credit' => $datetime_auxiliary_material_credit])
            ->with(['auxiliary_material_credits' => $auxiliary_material_credits]);
    }

    //create
    public function create()
    {

        return view('auxiliary_material_credits.create');
    }

    //store
    public function store(Request $request)
    {

        $request->validate([
            'datetime_auxiliary_material_credit' => 'required',
            'auxiliary_material_credit_creditor' => 'required',
            'rmb_auxiliary_material_credit' => 'required',
            'usd_auxiliary_material_credit' => 'required',
        ], [
            'datetime_auxiliary_material_credit.required' => '記録日を記入してください',
            'auxiliary_material_credit_creditor.required' => '顧客名を記入してください',
            'rmb_auxiliary_material_credit.required' => '人民元(rmb)ない場合は0を記録してください',
            'usd_auxiliary_material_credit.required' => '米ドル(usd)ない場合は0を記録してください',
        ]);

        $auxiliary_material_credits = new AuxiliaryMaterialCredit();
        $auxiliary_material_credits->datetime_auxiliary_material_credit = $request->datetime_auxiliary_material_credit;
        $auxiliary_material_credits->auxiliary_material_credit_creditor = $request->auxiliary_material_credit_creditor;
        $auxiliary_material_credits->rmb_auxiliary_material_credit = $request->rmb_auxiliary_material_credit;
        $auxiliary_material_credits->usd_auxiliary_material_credit = $request->usd_auxiliary_material_credit;
        $auxiliary_material_credits->save();

        return redirect()
            ->route('details.index');
    }

    public function test(Request $request)
    {
        if (!empty($request['from']) && !empty($request['until'])) {
            $auxiliary_material_credits = AuxiliaryMaterialCredit::getAuxiliaryMaterialCredit($request['from'], $request['until']);
        } else {
            $auxiliary_material_credits = AuxiliaryMaterialCredit::get();
        }

        return view('auxiliary_material_credits.show')
            ->with(['auxiliary_material_credits' => $auxiliary_material_credits]);
    }


    // name
    public function name(Request $request)
    {
        if (!empty($request['auxiliary_material_credit_creditor']) && !empty($request['from']) && !empty($request['until'])) {
            $auxiliary_material_credits = AuxiliaryMaterialCredit::getAuxiliaryMaterialCreditName($request['auxiliary_material_credit_creditor'], $request['from'], $request['until']);
        } else {
            $auxiliary_material_credits = AuxiliaryMaterialCredit::get();
        }

        return view('auxiliary_material_credits.show2')
            ->with(['auxiliary_material_credits' => $auxiliary_material_credits]);
    }

    //show2
    public function show2()
    {

        $datetime_auxiliary_material_credit = AuxiliaryMaterialCredit::all();
        $auxiliary_material_credits = AuxiliaryMaterialCredit::all();
        $auxiliary_material_credits = AuxiliaryMaterialCredit::sortable()->get();


        return view('auxiliary_material_credits.show2')
            ->with(['datetime_auxiliary_material_credit' => $datetime_auxiliary_material_credit])
            ->with(['auxiliary_material_credits' => $auxiliary_material_credits]);
    }

    // destroy
    public function destroy(AuxiliaryMaterialCredit $auxiliary_material_credit)
    {
        $auxiliary_material_credit->delete();

        return to_route('details.index');
    }
}
