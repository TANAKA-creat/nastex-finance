<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// samurai山下先生の指導で下記1行CreditServiceを追記する
use App\Http\Services\TaxCreditService;
use App\Http\Services\SalaryCreditService;
use App\Http\Services\MaterialCreditService;
use App\Http\Services\AuxiliaryMaterialCreditService;
use App\Http\Services\LogisticsCostService;
use App\Http\Services\EntertainmentExpenseService;
use App\Http\Services\TravelExpenseService;
use App\Http\Services\TicketFeeService;
use App\Http\Services\MiscellaneousExpenseService;
use App\Http\Services\OtherService;
use App\Http\Services\UtilityCostService;
use App\Http\Services\InsuranceService;
use App\Http\Services\WithinChinaDepositService;
use App\Http\Services\OtherCountryDepositService;
use App\Http\Services\HongkongDepositService;
use App\Http\Services\OutsourcingDepositService;
use App\Http\Services\OtherDepositService;
use App\Http\Services\MoneyCarriedForwardService;
use App\Http\Services\NoReceiptDepositService;
use App\Http\Services\NoReceiptCreditService;
use App\Http\Services\NoReceiptOtherDepositService;
use App\Http\Services\CustomerService;


use App\Models\Detail;
use App\Models\TaxCredit;
use App\Models\SalaryCredit;
use App\Models\MaterialCredit;
use App\Models\AuxiliaryMaterialCredit;
use App\Models\LogisticsCost;
use App\Models\EntertainmentExpense;
use App\Models\TravelExpense;
use App\Models\TicketFee;
use App\Models\MiscellaneousExpenseExpense;
use App\Models\Other;
use App\Models\UtilityCost;
use App\Models\Insurance;
use App\Models\Category;
use App\Models\WithinChinaDeposit;
use App\Models\OtherCountryDeposit;
use App\Models\HongkongDeposit;
use App\Models\OutsourcingDeposit;
use App\Models\OtherDeposit;
use App\Models\MoneyCarriedForward;
use App\Models\NoReceiptDeposit;
use App\Models\NoReceiptCredit;
use App\Models\NoReceiptOtherDeposit;
use App\Models\Customer;


// 2022/12/14 carbon test 下記追記
use Carbon\Carbon;

class DetailController extends Controller
{

    //index
    public function index() {

         $datetime = Detail::all();
         $details = Detail::all();
         $details = Detail::sortable()->get();

         // 2022/12/08カテゴリー機能追記
         $categories = Category::all();
         $major_category_names = Category::pluck('major_category_name')->unique();

         // samurai山下先生の指導で下記2行追記する
         $datetime_tax_credit = TaxCreditService::getDatetimeTaxCredit();
         $tax_credits = TaxCreditService::getTaxCredit();

         $datetime_salary_credit = SalaryCreditService::getDatetimeSalaryCredit();
         $salary_credits = SalaryCreditService::getSalaryCredit();

         $datetime_material_credit = MaterialCreditService::getDatetimeMaterialCredit();
         $material_credits = MaterialCreditService::getMaterialCredit();

         $datetime_auxiliary_material_credit = AuxiliaryMaterialCreditService::getDatetimeAuxiliaryMaterialCredit();
         $auxiliary_material_credits = AuxiliaryMaterialCreditService::getAuxiliaryMaterialCredit();

         $datetime_logistics_cost = LogisticsCostService::getDatetimeLogisticsCost();
         $logistics_costs = LogisticsCostService::getLogisticsCost();

         $datetime_entertainment_expense = EntertainmentExpenseService::getDatetimeEntertainmentExpense();
         $entertainment_expenses = EntertainmentExpenseService::getEntertainmentExpense();

         $datetime_travel_expense = TravelExpenseService::getDatetimeTravelExpense();
         $travel_expenses = TravelExpenseService::getTravelExpense();

         $datetime_ticket_fee = TicketFeeService::getDatetimeTicketFee();
         $ticket_fees = TicketFeeService::getTicketFee();

         $datetime_miscellaneous_expense = MiscellaneousExpenseService::getDatetimeMiscellaneousExpense();
         $miscellaneous_expenses = MiscellaneousExpenseService::getMiscellaneousExpense();

         $datetime_other = OtherService::getDatetimeOther();
         $others = OtherService::getOther();

         $datetime_utility_cost = UtilityCostService::getDatetimeUtilityCost();
         $utility_costs = UtilityCostService::getUtilityCost();

         $datetime_insurance = InsuranceService::getDatetimeInsurance();
         $insurances = InsuranceService::getInsurance();

         $datetime_within_china_deposit = WithinChinaDepositService::getDatetimeWithinChinaDeposit();
         $within_china_deposits = WithinChinaDepositService::getWithinChinaDeposit();

         $datetime_other_country_deposit = OtherCountryDepositService::getDatetimeOtherCountryDeposit();
         $other_country_deposits = OtherCountryDepositService::getOtherCountryDeposit();

         $datetime_hongkong_deposit = HongkongDepositService::getDatetimeHongkongDeposit();
         $hongkong_deposits = HongkongDepositService::getHongkongDeposit();

         $datetime_outsourcing_deposit = OutsourcingDepositService::getDatetimeOutsourcingDeposit();
         $outsourcing_deposits = OutsourcingDepositService::getOutsourcingDeposit();

         $datetime_other_deposit = OtherDepositService::getDatetimeOtherDeposit();
         $other_deposits = OtherDepositService::getOtherDeposit();

         $datetime_money_carried_forward = MoneyCarriedForwardService::getDatetimeMoneyCarriedForward();
         $money_carried_forwards = MoneyCarriedForwardService::getMoneyCarriedForward();

         $datetime_no_receipt_deposit = NoReceiptDepositService::getDatetimeNoReceiptDeposit();
         $no_receipt_deposits = NoReceiptDepositService::getNoReceiptDeposit();

         $datetime_no_receipt_credit = NoReceiptCreditService::getDatetimeNoReceiptCredit();
         $no_receipt_credits = NoReceiptCreditService::getNoReceiptCredit();

         $datetime_no_receipt_other_deposit = NoReceiptOtherDepositService::getDatetimeNoReceiptOtherDeposit();
         $no_receipt_other_deposits = NoReceiptOtherDepositService::getNoReceiptOtherDeposit();

        //  $datetime_no_receipt_other_deposit = NoReceiptOtherDepositService::getDatetimeNoReceiptOtherDeposit();
         $customers = CustomerService::getCustomer();


        return view('index')
         ->with(['datetime'=>$datetime])
         ->with(['details'=> $details])
         ->with(['categories' => $categories])
         ->with(['major_category_names' => $major_category_names] )
         // samurai山下先生の指導で下記2行追記する
         ->with(['datetime_tax_credit'=> $datetime_tax_credit])
         ->with(['tax_credits'=>$tax_credits])

         ->with(['datetime_salary_credit'=> $datetime_salary_credit])
         ->with(['salary_credits'=>$salary_credits])

         ->with(['datetime_material_credit'=> $datetime_material_credit])
         ->with(['material_credits'=>$material_credits])

         ->with(['datetime_auxiliary_material_credit'=> $datetime_auxiliary_material_credit])
         ->with(['auxiliary_material_credits'=>$auxiliary_material_credits])

         ->with(['datetime_logistics_cost'=> $datetime_logistics_cost])
         ->with(['logistics_costs'=>$logistics_costs])

         ->with(['datetime_entertainment_expense'=> $datetime_entertainment_expense])
         ->with(['entertainment_expenses'=>$entertainment_expenses])

         ->with(['datetime_travel_expense'=> $datetime_travel_expense])
         ->with(['travel_expenses'=>$travel_expenses])

         ->with(['datetime_ticket_fee'=> $datetime_ticket_fee])
         ->with(['ticket_fees'=>$ticket_fees])

         ->with(['datetime_miscellaneous_expense'=> $datetime_miscellaneous_expense])
         ->with(['miscellaneous_expenses'=>$miscellaneous_expenses])

         ->with(['datetime_other'=> $datetime_other])
         ->with(['others'=>$others])

         ->with(['datetime_utility_cost'=> $datetime_utility_cost])
         ->with(['utility_costs'=>$utility_costs])

         ->with(['datetime_insurance'=> $datetime_insurance])
         ->with(['insurances'=>$insurances])

         ->with(['datetime_within_china_deposit'=> $datetime_within_china_deposit])
         ->with(['within_china_deposits'=>$within_china_deposits])

         ->with(['datetime_other_country_deposit'=> $datetime_other_country_deposit])
         ->with(['other_country_deposits'=>$other_country_deposits])

         ->with(['datetime_hongkong_deposit'=> $datetime_hongkong_deposit])
         ->with(['hongkong_deposits'=>$hongkong_deposits])

         ->with(['datetime_outsourcing_deposit'=> $datetime_outsourcing_deposit])
         ->with(['outsourcing_deposits'=>$outsourcing_deposits])

         ->with(['datetime_other_deposit'=> $datetime_other_deposit])
         ->with(['other_deposits'=>$other_deposits])

         ->with(['datetime_money_carried_forward'=> $datetime_money_carried_forward])
         ->with(['money_carried_forwards'=>$money_carried_forwards])

         ->with(['datetime_no_receipt_deposit'=> $datetime_no_receipt_deposit])
         ->with(['no_receipt_deposits'=>$no_receipt_deposits])

         ->with(['datetime_no_receipt_credit'=> $datetime_no_receipt_credit])
         ->with(['no_receipt_credits'=>$no_receipt_credits])

         ->with(['datetime_no_receipt_other_deposit'=> $datetime_no_receipt_other_deposit])
         ->with(['no_receipt_other_deposits'=>$no_receipt_other_deposits])

        //  ->with(['datetime_no_receipt_other_deposit'=> $datetime_no_receipt_other_deposit])
         ->with(['customers'=>$customers]);

    }

    //edit
    public function edit(Detail $detail)
    {
        return view('details.edit')
         ->with(['detail' => $detail]);
    }

    //update
    public function update(Detail $detail, Request $request) {

        $request->validate([
            'datetime' => 'required',
            'customer' => 'required',
            'rmb' => 'required',
            'usd' => 'required',
        ],[
            'datetime.required' => '記録日を記入してください',
            'customer.required' => '顧客名を記入してください',
            'rmb.required' => '人民元(rmb)ない場合は0を記録してください',
            'usd.required' => '米ドル(usd)ない場合は0を記録してください',
        ]);

        $detail->datetime = $request->datetime;
        $detail->customer = $request->customer;
        $detail->rmb = $request->rmb;
        $detail->usd = $request->usd;
        $detail->save();

        return redirect()
         ->route('details.show');
    }

    //show
    public function show() {

        $datetime = Detail::all();
        $details = Detail::all();
        $details = Detail::sortable()->get();

        return view('details.show')
         ->with(['datetime' => $datetime])
         ->with(['details'=> $details]);
    }

     //create
     public function create() {

        return view('details.create');
    }

    //store
    public function store(Request $request) {

        $request->validate([
            'datetime' => 'required',
            'customer' => 'required',
            'rmb' => 'required',
            'usd' => 'required',
        ],[
            'datetime.required' => '記録日を記入してください',
            'customer.required' => '顧客名を記入してください',
            'rmb.required' => '人民元(rmb)ない場合は0を記録してください',
            'usd.required' => '米ドル(usd)ない場合は0を記録してください',
        ]);

        $details = new Detail();
        $details->datetime = $request->datetime;
        $details->customer = $request->customer;
        $details->rmb = $request->rmb;
        $details->usd = $request->usd;
        $details->save();

        return redirect()
         ->route('details.index');
    }

    public function test(Request $request)
    {
        if(!empty($request['from']) && !empty($request['until'])) {
            $details = Detail::getDetail($request['from'],$request['until']);
        } else {
            $details = Detail::get();
        }

        return view('details.show')
        ->with(['details'=> $details]);
    }

    // name
    public function name(Request $request)
    {
    if(!empty($request['customer']) && !empty($request['from']) && !empty($request['until'])) {
        $details = Detail::getDetailName($request['customer'], $request['from'],$request['until']);
    } 
        else {
        $details = Detail::get();
    }

    return view('details.show2')
    ->with(['details'=> $details]);
    }

    //show2
    public function show2() {

    $datetime = Detail::all();
    $details = Detail::all();
    $details = Detail::sortable()->get();

    return view('details.show2')
        ->with(['datetime' => $datetime])
        ->with(['details'=> $details]);
    }


    // destroy
    public function destroy(Detail $detail)
    {
        $detail->delete();

        return to_route('details.index');
    }
    

}
