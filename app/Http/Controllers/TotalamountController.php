<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Customer2;

use App\Models\Detail;
use App\Models\OtherCountryDeposit;
use App\Models\WithinChinaDeposit;
use App\Models\NoReceiptDeposit;
use App\Models\HongkongDeposit;
use App\Models\OutsourcingDeposit;
use App\Models\OtherDeposit;
use App\Models\NoReceiptOtherDeposit;

use App\Models\MaterialCredit;
use App\Models\AuxiliaryMaterialCredit;
use App\Models\SalaryCredit;
use App\Models\Insurance;
use App\Models\TicketFee;
use App\Models\TravelExpense;
use App\Models\UtilityCost;
use App\Models\TaxCredit;
use App\Models\MiscellaneousExpense;
use App\Models\EntertainmentExpense;
use App\Models\LogisticsCost;
use App\Models\Other;
use App\Models\NoReceiptCredit;


use Carbon\Carbon;

class TotalamountController extends Controller
{
    // index
    public function index(Request $request)
    {
        $details = Detail::all();
        $other_country_deposits = OtherCountryDeposit::all();
        $within_china_deposits = WithinChinaDeposit::all();
        $no_receipt_deposits = NoReceiptDeposit::all();
        $hongkong_deposits = HongkongDeposit::all();
        $outsourcing_deposits = OutsourcingDeposit::all();
        $other_deposits = OtherDeposit::all();
        $no_receipt_other_deposits = NoReceiptOtherDeposit::all();

        $material_credits = MaterialCredit::all();
        $auxiliary_material_credits = AuxiliaryMaterialCredit::all();
        $salary_credits = SalaryCredit::all();
        $insurances = Insurance::all();
        $ticket_fees = TicketFee::all();
        $travel_expenses = TravelExpense::all();
        $utility_costs = UtilityCost::all();
        $tax_credits = TaxCredit::all();
        $miscellaneous_expenses = MiscellaneousExpense::all();
        $entertainment_expenses = EntertainmentExpense::all();
        $logistics_costs = LogisticsCost::all();
        $others = Other::all();
        $no_receipt_credits = NoReceiptCredit::all();

        return view('totalamount.index' , compact('details','other_country_deposits','within_china_deposits','hongkong_deposits','other_deposits','outsourcing_deposits','no_receipt_deposits','no_receipt_other_deposits',
        'material_credits','auxiliary_material_credits','salary_credits','insurances','ticket_fees','travel_expenses','utility_costs','miscellaneous_expenses','tax_credits','entertainment_expenses','logistics_costs','others','no_receipt_credits'
    ));
    }


         // index2
        public function index2(Request $request)
        {
        $details = Detail::all();
        $other_country_deposits = OtherCountryDeposit::all();
        $within_china_deposits = WithinChinaDeposit::all();
        $no_receipt_deposits = NoReceiptDeposit::all();
        $hongkong_deposits = HongkongDeposit::all();
        $outsourcing_deposits = OutsourcingDeposit::all();
        $other_deposits = OtherDeposit::all();
        $no_receipt_other_deposits = NoReceiptOtherDeposit::all();

        $material_credits = MaterialCredit::all();
        $auxiliary_material_credits = AuxiliaryMaterialCredit::all();
        $salary_credits = SalaryCredit::all();
        $insurances = Insurance::all();
        $ticket_fees = TicketFee::all();
        $travel_expenses = TravelExpense::all();
        $utility_costs = UtilityCost::all();
        $tax_credits = TaxCredit::all();
        $miscellaneous_expenses = MiscellaneousExpense::all();
        $entertainment_expenses = EntertainmentExpense::all();
        $logistics_costs = LogisticsCost::all();
        $others = Other::all();
        $no_receipt_credits = NoReceiptCredit::all();

        return view('totalamount.index2' , compact('details','other_country_deposits','within_china_deposits','hongkong_deposits','other_deposits','outsourcing_deposits','no_receipt_deposits','no_receipt_other_deposits',
        'material_credits','auxiliary_material_credits','salary_credits','insurances','ticket_fees','travel_expenses','utility_costs','miscellaneous_expenses','tax_credits','entertainment_expenses','logistics_costs','others','no_receipt_credits'
        ));
        }

        // index3
        public function index3(Request $request)
        {

            $within_china_deposits = WithinChinaDeposit::sortable()->get();
        // $customers = Customer::all();
        // $customers::with('within_china_deposits')->get();


        // $customer = Customer::where('customer_id')->where('customer_name')->get();

        // $details = Detail::all();
        // $other_country_deposits = OtherCountryDeposit::all();
        $within_china_deposits = WithinChinaDeposit::all();
        // $no_receipt_deposits = NoReceiptDeposit::all();
        // $hongkong_deposits = HongkongDeposit::all();
        // $outsourcing_deposits = OutsourcingDeposit::all();
        // $other_deposits = OtherDeposit::all();
        // $no_receipt_other_deposits = NoReceiptOtherDeposit::all();

        // $material_credits = MaterialCredit::all();
        // $auxiliary_material_credits = AuxiliaryMaterialCredit::all();
        // $salary_credits = SalaryCredit::all();
        // $insurances = Insurance::all();
        // $ticket_fees = TicketFee::all();
        // $travel_expenses = TravelExpense::all();
        // $utility_costs = UtilityCost::all();
        // $tax_credits = TaxCredit::all();
        // $miscellaneous_expenses = MiscellaneousExpense::all();
        // $entertainment_expenses = EntertainmentExpense::all();
        // $logistics_costs = LogisticsCost::all();
        // $others = Other::all();
        // $no_receipt_credits = NoReceiptCredit::all();
        

        $customers = Customer::all();
        $customers = Customer::where('customer_id','1')->first(['customer_name']);
        $customer_name = $customers->attributesToArray();
        $customers = Customer::where('customer_id','2')->first(['customer_name']);
        $customer_name2 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','3')->first(['customer_name']);
        $customer_name3 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','4')->first(['customer_name']);
        $customer_name4 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','5')->first(['customer_name']);
        $customer_name5 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','6')->first(['customer_name']);
        $customer_name6 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','7')->first(['customer_name']);
        $customer_name7 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','8')->first(['customer_name']);
        $customer_name8 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','9')->first(['customer_name']);
        $customer_name9 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','10')->first(['customer_name']);
        $customer_name10 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','11')->first(['customer_name']);
        $customer_name11 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','12')->first(['customer_name']);
        $customer_name12 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','13')->first(['customer_name']);
        $customer_name13 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','14')->first(['customer_name']);
        $customer_name14 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','15')->first(['customer_name']);
        $customer_name15 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','16')->first(['customer_name']);
        $customer_name16 = $customers->attributesToArray();
        // $customers = Customer::where('customer_id','17')->first(['customer_name']);
        // $customer_name17 = $customers->attributesToArray();
        // $customers = Customer::where('customer_id','18')->first(['customer_name']);
        // $customer_name18 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','19')->first(['customer_name']);
        $customer_name19 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','20')->first(['customer_name']);
        $customer_name20= $customers->attributesToArray();
        $customers = Customer::where('customer_id','21')->first(['customer_name']);
        $customer_name21 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','22')->first(['customer_name']);
        $customer_name22 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','23')->first(['customer_name']);
        $customer_name23 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','24')->first(['customer_name']);
        $customer_name24 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','25')->first(['customer_name']);
        $customer_name25 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','26')->first(['customer_name']);
        $customer_name26 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','27')->first(['customer_name']);
        $customer_name27 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','28')->first(['customer_name']);
        $customer_name28 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','29')->first(['customer_name']);
        $customer_name29 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','30')->first(['customer_name']);
        $customer_name30 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','31')->first(['customer_name']);
        $customer_name31 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','32')->first(['customer_name']);
        $customer_name32 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','33')->first(['customer_name']);
        $customer_name33 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','34')->first(['customer_name']);
        $customer_name34 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','35')->first(['customer_name']);
        $customer_name35 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','36')->first(['customer_name']);
        $customer_name36 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','37')->first(['customer_name']);
        $customer_name37 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','38')->first(['customer_name']);
        $customer_name38 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','39')->first(['customer_name']);
        $customer_name39 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','40')->first(['customer_name']);
        $customer_name40 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','41')->first(['customer_name']);
        $customer_name41 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','42')->first(['customer_name']);
        $customer_name42 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','43')->first(['customer_name']);
        $customer_name43 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','44')->first(['customer_name']);
        $customer_name44 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','45')->first(['customer_name']);
        $customer_name45 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','46')->first(['customer_name']);
        $customer_name46 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','47')->first(['customer_name']);
        $customer_name47 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','48')->first(['customer_name']);
        $customer_name48 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','49')->first(['customer_name']);
        $customer_name49 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','50')->first(['customer_name']);
        $customer_name50 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','51')->first(['customer_name']);
        $customer_name51 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','52')->first(['customer_name']);
        $customer_name52 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','53')->first(['customer_name']);
        $customer_name53 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','54')->first(['customer_name']);
        $customer_name54 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','55')->first(['customer_name']);
        $customer_name55 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','56')->first(['customer_name']);
        $customer_name56 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','57')->first(['customer_name']);
        $customer_name57 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','58')->first(['customer_name']);
        $customer_name58 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','59')->first(['customer_name']);
        $customer_name59 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','60')->first(['customer_name']);
        $customer_name60 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','61')->first(['customer_name']);
        $customer_name61 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','62')->first(['customer_name']);
        $customer_name62 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','63')->first(['customer_name']);
        $customer_name63 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','64')->first(['customer_name']);
        $customer_name64 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','65')->first(['customer_name']);
        $customer_name65 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','66')->first(['customer_name']);
        $customer_name66 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','67')->first(['customer_name']);
        $customer_name67 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','68')->first(['customer_name']);
        $customer_name68 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','69')->first(['customer_name']);
        $customer_name69 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','70')->first(['customer_name']);
        $customer_name70 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','71')->first(['customer_name']);
        $customer_name71 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','72')->first(['customer_name']);
        $customer_name72 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','73')->first(['customer_name']);
        $customer_name73 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','74')->first(['customer_name']);
        $customer_name74 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','75')->first(['customer_name']);
        $customer_name75 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','76')->first(['customer_name']);
        $customer_name76 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','77')->first(['customer_name']);
        $customer_name77 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','78')->first(['customer_name']);
        $customer_name78 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','79')->first(['customer_name']);
        $customer_name79 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','80')->first(['customer_name']);
        $customer_name80 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','81')->first(['customer_name']);
        $customer_name81 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','82')->first(['customer_name']);
        $customer_name82 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','83')->first(['customer_name']);
        $customer_name83 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','84')->first(['customer_name']);
        $customer_name84 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','85')->first(['customer_name']);
        $customer_name85 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','86')->first(['customer_name']);
        $customer_name86 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','87')->first(['customer_name']);
        $customer_name87 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','88')->first(['customer_name']);
        $customer_name88 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','89')->first(['customer_name']);
        $customer_name89 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','90')->first(['customer_name']);
        $customer_name90 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','91')->first(['customer_name']);
        $customer_name91 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','92')->first(['customer_name']);
        $customer_name92 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','93')->first(['customer_name']);
        $customer_name93 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','94')->first(['customer_name']);
        $customer_name94 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','95')->first(['customer_name']);
        $customer_name95 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','96')->first(['customer_name']);
        $customer_name96 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','97')->first(['customer_name']);
        $customer_name97 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','98')->first(['customer_name']);
        $customer_name98 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','99')->first(['customer_name']);
        $customer_name99 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','100')->first(['customer_name']);
        $customer_name100 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','101')->first(['customer_name']);
        $customer_name101 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','102')->first(['customer_name']);
        $customer_name102 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','103')->first(['customer_name']);
        $customer_name103 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','104')->first(['customer_name']);
        $customer_name104 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','105')->first(['customer_name']);
        $customer_name105 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','106')->first(['customer_name']);
        $customer_name106 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','107')->first(['customer_name']);
        $customer_name107 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','108')->first(['customer_name']);
        $customer_name108 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','109')->first(['customer_name']);
        $customer_name109 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','110')->first(['customer_name']);
        $customer_name110 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','111')->first(['customer_name']);
        $customer_name111 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','112')->first(['customer_name']);
        $customer_name112 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','113')->first(['customer_name']);
        $customer_name113 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','114')->first(['customer_name']);
        $customer_name114 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','115')->first(['customer_name']);
        $customer_name115 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','116')->first(['customer_name']);
        $customer_name116 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','117')->first(['customer_name']);
        $customer_name117 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','118')->first(['customer_name']);
        $customer_name118 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','119')->first(['customer_name']);
        $customer_name119 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','120')->first(['customer_name']);
        $customer_name120 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','121')->first(['customer_name']);
        $customer_name121 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','122')->first(['customer_name']);
        $customer_name122 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','123')->first(['customer_name']);
        $customer_name123 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','124')->first(['customer_name']);
        $customer_name124 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','125')->first(['customer_name']);
        $customer_name125 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','126')->first(['customer_name']);
        $customer_name126 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','127')->first(['customer_name']);
        $customer_name127 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','128')->first(['customer_name']);
        $customer_name128 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','129')->first(['customer_name']);
        $customer_name129 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','130')->first(['customer_name']);
        $customer_name130 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','131')->first(['customer_name']);
        $customer_name131 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','132')->first(['customer_name']);
        $customer_name132 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','133')->first(['customer_name']);
        $customer_name133 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','134')->first(['customer_name']);
        $customer_name134 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','135')->first(['customer_name']);
        $customer_name135 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','136')->first(['customer_name']);
        $customer_name136 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','137')->first(['customer_name']);
        $customer_name137 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','138')->first(['customer_name']);
        $customer_name138 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','139')->first(['customer_name']);
        $customer_name139 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','140')->first(['customer_name']);
        $customer_name140 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','141')->first(['customer_name']);
        $customer_name141 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','142')->first(['customer_name']);
        $customer_name142 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','143')->first(['customer_name']);
        $customer_name143 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','144')->first(['customer_name']);
        $customer_name144 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','145')->first(['customer_name']);
        $customer_name145 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','146')->first(['customer_name']);
        $customer_name146 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','147')->first(['customer_name']);
        $customer_name147 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','148')->first(['customer_name']);
        $customer_name148 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','149')->first(['customer_name']);
        $customer_name149 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','150')->first(['customer_name']);
        $customer_name150 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','151')->first(['customer_name']);
        $customer_name151 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','152')->first(['customer_name']);
        $customer_name152 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','153')->first(['customer_name']);
        $customer_name153 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','154')->first(['customer_name']);
        $customer_name154 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','155')->first(['customer_name']);
        $customer_name155 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','156')->first(['customer_name']);
        $customer_name156 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','157')->first(['customer_name']);
        $customer_name157 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','158')->first(['customer_name']);
        $customer_name158 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','159')->first(['customer_name']);
        $customer_name159 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','160')->first(['customer_name']);
        $customer_name160 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','161')->first(['customer_name']);
        $customer_name161 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','162')->first(['customer_name']);
        $customer_name162 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','163')->first(['customer_name']);
        $customer_name163 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','164')->first(['customer_name']);
        $customer_name164 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','165')->first(['customer_name']);
        $customer_name165 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','166')->first(['customer_name']);
        $customer_name166 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','167')->first(['customer_name']);
        $customer_name167 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','168')->first(['customer_name']);
        $customer_name168 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','169')->first(['customer_name']);
        $customer_name169 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','170')->first(['customer_name']);
        $customer_name170 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','171')->first(['customer_name']);
        $customer_name171 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','172')->first(['customer_name']);
        $customer_name172 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','173')->first(['customer_name']);
        $customer_name173 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','174')->first(['customer_name']);
        $customer_name174 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','175')->first(['customer_name']);
        $customer_name175 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','176')->first(['customer_name']);
        $customer_name176 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','177')->first(['customer_name']);
        $customer_name177 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','178')->first(['customer_name']);
        $customer_name178 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','179')->first(['customer_name']);
        $customer_name179 = $customers->attributesToArray();
        $customers = Customer::where('customer_id','180')->first(['customer_name']);
        $customer_name180 = $customers->attributesToArray();
        

        return view('totalamount.index3' , compact('customers','within_china_deposits',/*'no_receipt_deposits',*/
        'customer_name','customer_name2','customer_name3','customer_name4','customer_name5','customer_name6','customer_name7','customer_name8','customer_name9','customer_name10',
        'customer_name11','customer_name12','customer_name13','customer_name14','customer_name15','customer_name16',/*'customer_name17','customer_name18',*/'customer_name19','customer_name20',
        'customer_name21','customer_name22','customer_name23','customer_name24','customer_name25','customer_name26','customer_name27','customer_name28','customer_name29','customer_name30',
        'customer_name31','customer_name32','customer_name33','customer_name34','customer_name35','customer_name36','customer_name37','customer_name38','customer_name39','customer_name40',
        'customer_name41','customer_name42','customer_name43','customer_name44','customer_name45','customer_name46','customer_name47','customer_name48','customer_name49','customer_name50',
        'customer_name51','customer_name52','customer_name53','customer_name54','customer_name55','customer_name56','customer_name57','customer_name58','customer_name59','customer_name60',
        'customer_name61','customer_name62','customer_name63','customer_name64','customer_name65','customer_name66','customer_name67','customer_name68','customer_name69','customer_name70',
        'customer_name71','customer_name72','customer_name73','customer_name74','customer_name75','customer_name76','customer_name77','customer_name78','customer_name79','customer_name80',
        'customer_name81','customer_name82','customer_name83','customer_name84','customer_name85','customer_name86','customer_name87','customer_name88','customer_name89','customer_name90',
        'customer_name91','customer_name92','customer_name93','customer_name94','customer_name95','customer_name96','customer_name97','customer_name98','customer_name99','customer_name100',
        'customer_name101','customer_name102','customer_name103','customer_name104','customer_name105','customer_name106','customer_name107','customer_name108','customer_name109','customer_name110',
        'customer_name111','customer_name112','customer_name113','customer_name114','customer_name115','customer_name116','customer_name117','customer_name118','customer_name119','customer_name120',
        'customer_name121','customer_name122','customer_name123','customer_name124','customer_name125','customer_name126','customer_name127','customer_name128','customer_name129','customer_name130',
        'customer_name131','customer_name132','customer_name133','customer_name134','customer_name135','customer_name136','customer_name137','customer_name138','customer_name139','customer_name140',
        'customer_name141','customer_name142','customer_name143','customer_name144','customer_name145','customer_name146','customer_name147','customer_name148','customer_name149','customer_name150',
        'customer_name151','customer_name152','customer_name153','customer_name154','customer_name155','customer_name156','customer_name157','customer_name158','customer_name159','customer_name160',
        'customer_name161','customer_name162','customer_name163','customer_name164','customer_name165','customer_name166','customer_name167','customer_name168','customer_name169','customer_name170',
        'customer_name171','customer_name172','customer_name173','customer_name174','customer_name175','customer_name176','customer_name177','customer_name178','customer_name179','customer_name180'
       
    
    
        ));

        }

                // index3_2023
                public function index3_2023(Request $request)
                {

                $within_china_deposits = WithinChinaDeposit::sortable()->get();
                 // $customers = Customer::all();
                // $customers::with('within_china_deposits')->get();
        
        
                // $customer = Customer::where('customer_id')->where('customer_name')->get();
        
                // $details = Detail::all();
                // $other_country_deposits = OtherCountryDeposit::all();
                $within_china_deposits = WithinChinaDeposit::all();
                // $no_receipt_deposits = NoReceiptDeposit::all();
                // $hongkong_deposits = HongkongDeposit::all();
                // $outsourcing_deposits = OutsourcingDeposit::all();
                // $other_deposits = OtherDeposit::all();
                // $no_receipt_other_deposits = NoReceiptOtherDeposit::all();
        
                // $material_credits = MaterialCredit::all();
                // $auxiliary_material_credits = AuxiliaryMaterialCredit::all();
                // $salary_credits = SalaryCredit::all();
                // $insurances = Insurance::all();
                // $ticket_fees = TicketFee::all();
                // $travel_expenses = TravelExpense::all();
                // $utility_costs = UtilityCost::all();
                // $tax_credits = TaxCredit::all();
                // $miscellaneous_expenses = MiscellaneousExpense::all();
                // $entertainment_expenses = EntertainmentExpense::all();
                // $logistics_costs = LogisticsCost::all();
                // $others = Other::all();
                // $no_receipt_credits = NoReceiptCredit::all();
                
        
                $customers = Customer::all();
                $customers = Customer::where('customer_id','1')->first(['customer_name']);
                $customer_name = $customers->attributesToArray();
                $customers = Customer::where('customer_id','2')->first(['customer_name']);
                $customer_name2 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','3')->first(['customer_name']);
                $customer_name3 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','4')->first(['customer_name']);
                $customer_name4 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','5')->first(['customer_name']);
                $customer_name5 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','6')->first(['customer_name']);
                $customer_name6 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','7')->first(['customer_name']);
                $customer_name7 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','8')->first(['customer_name']);
                $customer_name8 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','9')->first(['customer_name']);
                $customer_name9 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','10')->first(['customer_name']);
                $customer_name10 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','11')->first(['customer_name']);
                $customer_name11 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','12')->first(['customer_name']);
                $customer_name12 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','13')->first(['customer_name']);
                $customer_name13 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','14')->first(['customer_name']);
                $customer_name14 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','15')->first(['customer_name']);
                $customer_name15 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','16')->first(['customer_name']);
                $customer_name16 = $customers->attributesToArray();
                // $customers = Customer::where('customer_id','17')->first(['customer_name']);
                // $customer_name17 = $customers->attributesToArray();
                // $customers = Customer::where('customer_id','18')->first(['customer_name']);
                // $customer_name18 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','19')->first(['customer_name']);
                $customer_name19 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','20')->first(['customer_name']);
                $customer_name20= $customers->attributesToArray();
                $customers = Customer::where('customer_id','21')->first(['customer_name']);
                $customer_name21 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','22')->first(['customer_name']);
                $customer_name22 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','23')->first(['customer_name']);
                $customer_name23 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','24')->first(['customer_name']);
                $customer_name24 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','25')->first(['customer_name']);
                $customer_name25 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','26')->first(['customer_name']);
                $customer_name26 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','27')->first(['customer_name']);
                $customer_name27 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','28')->first(['customer_name']);
                $customer_name28 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','29')->first(['customer_name']);
                $customer_name29 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','30')->first(['customer_name']);
                $customer_name30 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','31')->first(['customer_name']);
                $customer_name31 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','32')->first(['customer_name']);
                $customer_name32 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','33')->first(['customer_name']);
                $customer_name33 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','34')->first(['customer_name']);
                $customer_name34 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','35')->first(['customer_name']);
                $customer_name35 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','36')->first(['customer_name']);
                $customer_name36 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','37')->first(['customer_name']);
                $customer_name37 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','38')->first(['customer_name']);
                $customer_name38 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','39')->first(['customer_name']);
                $customer_name39 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','40')->first(['customer_name']);
                $customer_name40 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','41')->first(['customer_name']);
                $customer_name41 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','42')->first(['customer_name']);
                $customer_name42 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','43')->first(['customer_name']);
                $customer_name43 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','44')->first(['customer_name']);
                $customer_name44 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','45')->first(['customer_name']);
                $customer_name45 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','46')->first(['customer_name']);
                $customer_name46 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','47')->first(['customer_name']);
                $customer_name47 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','48')->first(['customer_name']);
                $customer_name48 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','49')->first(['customer_name']);
                $customer_name49 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','50')->first(['customer_name']);
                $customer_name50 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','51')->first(['customer_name']);
                $customer_name51 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','52')->first(['customer_name']);
                $customer_name52 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','53')->first(['customer_name']);
                $customer_name53 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','54')->first(['customer_name']);
                $customer_name54 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','55')->first(['customer_name']);
                $customer_name55 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','56')->first(['customer_name']);
                $customer_name56 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','57')->first(['customer_name']);
                $customer_name57 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','58')->first(['customer_name']);
                $customer_name58 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','59')->first(['customer_name']);
                $customer_name59 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','60')->first(['customer_name']);
                $customer_name60 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','61')->first(['customer_name']);
                $customer_name61 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','62')->first(['customer_name']);
                $customer_name62 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','63')->first(['customer_name']);
                $customer_name63 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','64')->first(['customer_name']);
                $customer_name64 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','65')->first(['customer_name']);
                $customer_name65 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','66')->first(['customer_name']);
                $customer_name66 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','67')->first(['customer_name']);
                $customer_name67 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','68')->first(['customer_name']);
                $customer_name68 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','69')->first(['customer_name']);
                $customer_name69 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','70')->first(['customer_name']);
                $customer_name70 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','71')->first(['customer_name']);
                $customer_name71 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','72')->first(['customer_name']);
                $customer_name72 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','73')->first(['customer_name']);
                $customer_name73 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','74')->first(['customer_name']);
                $customer_name74 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','75')->first(['customer_name']);
                $customer_name75 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','76')->first(['customer_name']);
                $customer_name76 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','77')->first(['customer_name']);
                $customer_name77 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','78')->first(['customer_name']);
                $customer_name78 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','79')->first(['customer_name']);
                $customer_name79 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','80')->first(['customer_name']);
                $customer_name80 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','81')->first(['customer_name']);
                $customer_name81 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','82')->first(['customer_name']);
                $customer_name82 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','83')->first(['customer_name']);
                $customer_name83 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','84')->first(['customer_name']);
                $customer_name84 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','85')->first(['customer_name']);
                $customer_name85 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','86')->first(['customer_name']);
                $customer_name86 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','87')->first(['customer_name']);
                $customer_name87 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','88')->first(['customer_name']);
                $customer_name88 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','89')->first(['customer_name']);
                $customer_name89 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','90')->first(['customer_name']);
                $customer_name90 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','91')->first(['customer_name']);
                $customer_name91 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','92')->first(['customer_name']);
                $customer_name92 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','93')->first(['customer_name']);
                $customer_name93 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','94')->first(['customer_name']);
                $customer_name94 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','95')->first(['customer_name']);
                $customer_name95 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','96')->first(['customer_name']);
                $customer_name96 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','97')->first(['customer_name']);
                $customer_name97 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','98')->first(['customer_name']);
                $customer_name98 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','99')->first(['customer_name']);
                $customer_name99 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','100')->first(['customer_name']);
                $customer_name100 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','101')->first(['customer_name']);
                $customer_name101 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','102')->first(['customer_name']);
                $customer_name102 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','103')->first(['customer_name']);
                $customer_name103 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','104')->first(['customer_name']);
                $customer_name104 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','105')->first(['customer_name']);
                $customer_name105 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','106')->first(['customer_name']);
                $customer_name106 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','107')->first(['customer_name']);
                $customer_name107 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','108')->first(['customer_name']);
                $customer_name108 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','109')->first(['customer_name']);
                $customer_name109 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','110')->first(['customer_name']);
                $customer_name110 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','111')->first(['customer_name']);
                $customer_name111 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','112')->first(['customer_name']);
                $customer_name112 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','113')->first(['customer_name']);
                $customer_name113 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','114')->first(['customer_name']);
                $customer_name114 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','115')->first(['customer_name']);
                $customer_name115 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','116')->first(['customer_name']);
                $customer_name116 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','117')->first(['customer_name']);
                $customer_name117 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','118')->first(['customer_name']);
                $customer_name118 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','119')->first(['customer_name']);
                $customer_name119 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','120')->first(['customer_name']);
                $customer_name120 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','121')->first(['customer_name']);
                $customer_name121 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','122')->first(['customer_name']);
                $customer_name122 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','123')->first(['customer_name']);
                $customer_name123 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','124')->first(['customer_name']);
                $customer_name124 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','125')->first(['customer_name']);
                $customer_name125 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','126')->first(['customer_name']);
                $customer_name126 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','127')->first(['customer_name']);
                $customer_name127 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','128')->first(['customer_name']);
                $customer_name128 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','129')->first(['customer_name']);
                $customer_name129 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','130')->first(['customer_name']);
                $customer_name130 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','131')->first(['customer_name']);
                $customer_name131 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','132')->first(['customer_name']);
                $customer_name132 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','133')->first(['customer_name']);
                $customer_name133 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','134')->first(['customer_name']);
                $customer_name134 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','135')->first(['customer_name']);
                $customer_name135 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','136')->first(['customer_name']);
                $customer_name136 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','137')->first(['customer_name']);
                $customer_name137 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','138')->first(['customer_name']);
                $customer_name138 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','139')->first(['customer_name']);
                $customer_name139 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','140')->first(['customer_name']);
                $customer_name140 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','141')->first(['customer_name']);
                $customer_name141 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','142')->first(['customer_name']);
                $customer_name142 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','143')->first(['customer_name']);
                $customer_name143 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','144')->first(['customer_name']);
                $customer_name144 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','145')->first(['customer_name']);
                $customer_name145 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','146')->first(['customer_name']);
                $customer_name146 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','147')->first(['customer_name']);
                $customer_name147 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','148')->first(['customer_name']);
                $customer_name148 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','149')->first(['customer_name']);
                $customer_name149 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','150')->first(['customer_name']);
                $customer_name150 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','151')->first(['customer_name']);
                $customer_name151 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','152')->first(['customer_name']);
                $customer_name152 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','153')->first(['customer_name']);
                $customer_name153 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','154')->first(['customer_name']);
                $customer_name154 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','155')->first(['customer_name']);
                $customer_name155 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','156')->first(['customer_name']);
                $customer_name156 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','157')->first(['customer_name']);
                $customer_name157 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','158')->first(['customer_name']);
                $customer_name158 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','159')->first(['customer_name']);
                $customer_name159 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','160')->first(['customer_name']);
                $customer_name160 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','161')->first(['customer_name']);
                $customer_name161 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','162')->first(['customer_name']);
                $customer_name162 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','163')->first(['customer_name']);
                $customer_name163 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','164')->first(['customer_name']);
                $customer_name164 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','165')->first(['customer_name']);
                $customer_name165 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','166')->first(['customer_name']);
                $customer_name166 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','167')->first(['customer_name']);
                $customer_name167 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','168')->first(['customer_name']);
                $customer_name168 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','169')->first(['customer_name']);
                $customer_name169 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','170')->first(['customer_name']);
                $customer_name170 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','171')->first(['customer_name']);
                $customer_name171 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','172')->first(['customer_name']);
                $customer_name172 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','173')->first(['customer_name']);
                $customer_name173 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','174')->first(['customer_name']);
                $customer_name174 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','175')->first(['customer_name']);
                $customer_name175 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','176')->first(['customer_name']);
                $customer_name176 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','177')->first(['customer_name']);
                $customer_name177 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','178')->first(['customer_name']);
                $customer_name178 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','179')->first(['customer_name']);
                $customer_name179 = $customers->attributesToArray();
                $customers = Customer::where('customer_id','180')->first(['customer_name']);
                $customer_name180 = $customers->attributesToArray();
                
        
                return view('totalamount.index3_2023' , compact('customers','within_china_deposits',/*'no_receipt_deposits',*/
                'customer_name','customer_name2','customer_name3','customer_name4','customer_name5','customer_name6','customer_name7','customer_name8','customer_name9','customer_name10',
                'customer_name11','customer_name12','customer_name13','customer_name14','customer_name15','customer_name16',/*'customer_name17','customer_name18',*/'customer_name19','customer_name20',
                'customer_name21','customer_name22','customer_name23','customer_name24','customer_name25','customer_name26','customer_name27','customer_name28','customer_name29','customer_name30',
                'customer_name31','customer_name32','customer_name33','customer_name34','customer_name35','customer_name36','customer_name37','customer_name38','customer_name39','customer_name40',
                'customer_name41','customer_name42','customer_name43','customer_name44','customer_name45','customer_name46','customer_name47','customer_name48','customer_name49','customer_name50',
                'customer_name51','customer_name52','customer_name53','customer_name54','customer_name55','customer_name56','customer_name57','customer_name58','customer_name59','customer_name60',
                'customer_name61','customer_name62','customer_name63','customer_name64','customer_name65','customer_name66','customer_name67','customer_name68','customer_name69','customer_name70',
                'customer_name71','customer_name72','customer_name73','customer_name74','customer_name75','customer_name76','customer_name77','customer_name78','customer_name79','customer_name80',
                'customer_name81','customer_name82','customer_name83','customer_name84','customer_name85','customer_name86','customer_name87','customer_name88','customer_name89','customer_name90',
                'customer_name91','customer_name92','customer_name93','customer_name94','customer_name95','customer_name96','customer_name97','customer_name98','customer_name99','customer_name100',
                'customer_name101','customer_name102','customer_name103','customer_name104','customer_name105','customer_name106','customer_name107','customer_name108','customer_name109','customer_name110',
                'customer_name111','customer_name112','customer_name113','customer_name114','customer_name115','customer_name116','customer_name117','customer_name118','customer_name119','customer_name120',
                'customer_name121','customer_name122','customer_name123','customer_name124','customer_name125','customer_name126','customer_name127','customer_name128','customer_name129','customer_name130',
                'customer_name131','customer_name132','customer_name133','customer_name134','customer_name135','customer_name136','customer_name137','customer_name138','customer_name139','customer_name140',
                'customer_name141','customer_name142','customer_name143','customer_name144','customer_name145','customer_name146','customer_name147','customer_name148','customer_name149','customer_name150',
                'customer_name151','customer_name152','customer_name153','customer_name154','customer_name155','customer_name156','customer_name157','customer_name158','customer_name159','customer_name160',
                'customer_name161','customer_name162','customer_name163','customer_name164','customer_name165','customer_name166','customer_name167','customer_name168','customer_name169','customer_name170',
                'customer_name171','customer_name172','customer_name173','customer_name174','customer_name175','customer_name176','customer_name177','customer_name178','customer_name179','customer_name180'
        

            ));

        }




        // index4
        public function index4(Request $request)
        {
            $no_receipt_credits = NoReceiptDeposit::sortable()->get();
            $no_receipt_deposits = NoReceiptDeposit::all();

            $customer2s = Customer2::all();
            $customer2s = Customer2::where('customer2_id','1')->first(['customer2_name']);
            $customer2_name = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','2')->first(['customer2_name']);
            $customer2_name2 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','3')->first(['customer2_name']);
            $customer2_name3 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','4')->first(['customer2_name']);
            $customer2_name4 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','5')->first(['customer2_name']);
            $customer2_name5 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','6')->first(['customer2_name']);
            $customer2_name6 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','7')->first(['customer2_name']);
            $customer2_name7 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','8')->first(['customer2_name']);
            $customer2_name8 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','9')->first(['customer2_name']);
            $customer2_name9 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','10')->first(['customer2_name']);
            $customer2_name10 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','11')->first(['customer2_name']);
            $customer2_name11 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','12')->first(['customer2_name']);
            $customer2_name12 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','13')->first(['customer2_name']);
            $customer2_name13 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','14')->first(['customer2_name']);
            $customer2_name14 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','15')->first(['customer2_name']);
            $customer2_name15 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','16')->first(['customer2_name']);
            $customer2_name16 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','17')->first(['customer2_name']);
            $customer2_name17 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','18')->first(['customer2_name']);
            $customer2_name18 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','19')->first(['customer2_name']);
            $customer2_name19 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','20')->first(['customer2_name']);
            $customer2_name20 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','21')->first(['customer2_name']);
            $customer2_name21 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','22')->first(['customer2_name']);
            $customer2_name22 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','23')->first(['customer2_name']);
            $customer2_name23 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','24')->first(['customer2_name']);
            $customer2_name24 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','25')->first(['customer2_name']);
            $customer2_name25 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','26')->first(['customer2_name']);
            $customer2_name26 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','27')->first(['customer2_name']);
            $customer2_name27 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','28')->first(['customer2_name']);
            $customer2_name28 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','29')->first(['customer2_name']);
            $customer2_name29 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','30')->first(['customer2_name']);
            $customer2_name30 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','31')->first(['customer2_name']);
            $customer2_name31 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','32')->first(['customer2_name']);
            $customer2_name32 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','33')->first(['customer2_name']);
            $customer2_name33 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','34')->first(['customer2_name']);
            $customer2_name34 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','35')->first(['customer2_name']);
            $customer2_name35 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','36')->first(['customer2_name']);
            $customer2_name36 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','37')->first(['customer2_name']);
            $customer2_name37 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','38')->first(['customer2_name']);
            $customer2_name38 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','39')->first(['customer2_name']);
            $customer2_name39 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','40')->first(['customer2_name']);
            $customer2_name40 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','41')->first(['customer2_name']);
            $customer2_name41 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','42')->first(['customer2_name']);
            $customer2_name42 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','43')->first(['customer2_name']);
            $customer2_name43 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','44')->first(['customer2_name']);
            $customer2_name44 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','45')->first(['customer2_name']);
            $customer2_name45 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','46')->first(['customer2_name']);
            $customer2_name46 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','47')->first(['customer2_name']);
            $customer2_name47 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','48')->first(['customer2_name']);
            $customer2_name48 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','49')->first(['customer2_name']);
            $customer2_name49 = $customer2s->attributesToArray();
            $customer2s = Customer2::where('customer2_id','50')->first(['customer2_name']);
            $customer2_name50 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','51')->first(['customer2_name']);
            // $customer2_name51 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','52')->first(['customer2_name']);
            // $customer2_name52 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','53')->first(['customer2_name']);
            // $customer2_name53 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','54')->first(['customer2_name']);
            // $customer2_name54 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','55')->first(['customer2_name']);
            // $customer2_name55 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','56')->first(['customer2_name']);
            // $customer2_name56 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','57')->first(['customer2_name']);
            // $customer2_name57 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','58')->first(['customer2_name']);
            // $customer2_name58 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','59')->first(['customer2_name']);
            // $customer2_name59 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','60')->first(['customer2_name']);
            // $customer2_name60 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','61')->first(['customer2_name']);
            // $customer2_name61 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','62')->first(['customer2_name']);
            // $customer2_name62 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','63')->first(['customer2_name']);
            // $customer2_name63 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','64')->first(['customer2_name']);
            // $customer2_name64 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','65')->first(['customer2_name']);
            // $customer2_name65 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','66')->first(['customer2_name']);
            // $customer2_name66 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','67')->first(['customer2_name']);
            // $customer2_name67 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','68')->first(['customer2_name']);
            // $customer2_name68 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','69')->first(['customer2_name']);
            // $customer2_name69 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','70')->first(['customer2_name']);
            // $customer2_name70 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','71')->first(['customer2_name']);
            // $customer2_name71 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','72')->first(['customer2_name']);
            // $customer2_name72 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','73')->first(['customer2_name']);
            // $customer2_name73 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','74')->first(['customer2_name']);
            // $customer2_name74 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','75')->first(['customer2_name']);
            // $customer2_name75 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','76')->first(['customer2_name']);
            // $customer2_name76 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','77')->first(['customer2_name']);
            // $customer2_name77 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','78')->first(['customer2_name']);
            // $customer2_name78 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','79')->first(['customer2_name']);
            // $customer2_name79 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','80')->first(['customer2_name']);
            // $customer2_name80 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','81')->first(['customer2_name']);
            // $customer2_name81 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','82')->first(['customer2_name']);
            // $customer2_name82 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','83')->first(['customer2_name']);
            // $customer2_name83 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','84')->first(['customer2_name']);
            // $customer2_name84 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','85')->first(['customer2_name']);
            // $customer2_name85 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','86')->first(['customer2_name']);
            // $customer2_name86 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','87')->first(['customer2_name']);
            // $customer2_name87 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','88')->first(['customer2_name']);
            // $customer2_name88 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','89')->first(['customer2_name']);
            // $customer2_name89 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','90')->first(['customer2_name']);
            // $customer2_name90 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','91')->first(['customer2_name']);
            // $customer2_name91 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','92')->first(['customer2_name']);
            // $customer2_name92 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','93')->first(['customer2_name']);
            // $customer2_name93 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','94')->first(['customer2_name']);
            // $customer2_name94 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','95')->first(['customer2_name']);
            // $customer2_name95 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','96')->first(['customer2_name']);
            // $customer2_name96 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','97')->first(['customer2_name']);
            // $customer2_name97 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','98')->first(['customer2_name']);
            // $customer2_name98 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','99')->first(['customer2_name']);
            // $customer2_name99 = $customer2s->attributesToArray();
            // $customer2s = Customer2::where('customer2_id','100')->first(['customer2_name']);
            // $customer2_name100 = $customer2s->attributesToArray();













            return view('totalamount.index4' , compact('customer2s','no_receipt_deposits',
            'customer2_name','customer2_name2','customer2_name3','customer2_name4','customer2_name5','customer2_name6','customer2_name7','customer2_name8','customer2_name9','customer2_name10',
            'customer2_name11','customer2_name12','customer2_name13','customer2_name14','customer2_name15','customer2_name16','customer2_name17','customer2_name18','customer2_name19','customer2_name20',
            'customer2_name21','customer2_name22','customer2_name23','customer2_name24','customer2_name25','customer2_name26','customer2_name27','customer2_name28','customer2_name29','customer2_name30',
            'customer2_name31','customer2_name32','customer2_name33','customer2_name34','customer2_name35','customer2_name36','customer2_name37','customer2_name38','customer2_name39','customer2_name40',
            'customer2_name41','customer2_name42','customer2_name43','customer2_name44','customer2_name45','customer2_name46','customer2_name47','customer2_name48','customer2_name49','customer2_name50',
            // 'customer2_name51','customer2_name52','customer2_name53','customer2_name54','customer2_name55','customer2_name56','customer2_name57','customer2_name58','customer2_name59','customer2_name60',
            // 'customer2_name61','customer2_name62','customer2_name63','customer2_name64','customer2_name65','customer2_name66','customer2_name67','customer2_name68','customer2_name69','customer2_name70',
            // 'customer2_name71','customer2_name72','customer2_name73','customer2_name74','customer2_name75','customer2_name76','customer2_name77','customer2_name78','customer2_name79','customer2_name80',
            // 'customer2_name81','customer2_name82','customer2_name83','customer2_name84','customer2_name85','customer2_name86','customer2_name87','customer2_name88','customer2_name89','customer2_name90',
            // 'customer2_name91','customer2_name92','customer2_name93','customer2_name94','customer2_name95','customer2_name96','customer2_name97','customer2_name98','customer2_name99','customer2_name100'
                     
        ));
    }

            // index4_2023
            public function index4_2023(Request $request)
            {
                $no_receipt_credits = NoReceiptDeposit::sortable()->get();
                $no_receipt_deposits = NoReceiptDeposit::all();
    
                $customer2s = Customer2::all();
                $customer2s = Customer2::where('customer2_id','1')->first(['customer2_name']);
                $customer2_name = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','2')->first(['customer2_name']);
                $customer2_name2 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','3')->first(['customer2_name']);
                $customer2_name3 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','4')->first(['customer2_name']);
                $customer2_name4 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','5')->first(['customer2_name']);
                $customer2_name5 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','6')->first(['customer2_name']);
                $customer2_name6 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','7')->first(['customer2_name']);
                $customer2_name7 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','8')->first(['customer2_name']);
                $customer2_name8 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','9')->first(['customer2_name']);
                $customer2_name9 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','10')->first(['customer2_name']);
                $customer2_name10 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','11')->first(['customer2_name']);
                $customer2_name11 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','12')->first(['customer2_name']);
                $customer2_name12 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','13')->first(['customer2_name']);
                $customer2_name13 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','14')->first(['customer2_name']);
                $customer2_name14 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','15')->first(['customer2_name']);
                $customer2_name15 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','16')->first(['customer2_name']);
                $customer2_name16 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','17')->first(['customer2_name']);
                $customer2_name17 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','18')->first(['customer2_name']);
                $customer2_name18 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','19')->first(['customer2_name']);
                $customer2_name19 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','20')->first(['customer2_name']);
                $customer2_name20 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','21')->first(['customer2_name']);
                $customer2_name21 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','22')->first(['customer2_name']);
                $customer2_name22 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','23')->first(['customer2_name']);
                $customer2_name23 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','24')->first(['customer2_name']);
                $customer2_name24 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','25')->first(['customer2_name']);
                $customer2_name25 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','26')->first(['customer2_name']);
                $customer2_name26 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','27')->first(['customer2_name']);
                $customer2_name27 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','28')->first(['customer2_name']);
                $customer2_name28 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','29')->first(['customer2_name']);
                $customer2_name29 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','30')->first(['customer2_name']);
                $customer2_name30 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','31')->first(['customer2_name']);
                $customer2_name31 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','32')->first(['customer2_name']);
                $customer2_name32 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','33')->first(['customer2_name']);
                $customer2_name33 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','34')->first(['customer2_name']);
                $customer2_name34 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','35')->first(['customer2_name']);
                $customer2_name35 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','36')->first(['customer2_name']);
                $customer2_name36 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','37')->first(['customer2_name']);
                $customer2_name37 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','38')->first(['customer2_name']);
                $customer2_name38 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','39')->first(['customer2_name']);
                $customer2_name39 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','40')->first(['customer2_name']);
                $customer2_name40 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','41')->first(['customer2_name']);
                $customer2_name41 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','42')->first(['customer2_name']);
                $customer2_name42 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','43')->first(['customer2_name']);
                $customer2_name43 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','44')->first(['customer2_name']);
                $customer2_name44 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','45')->first(['customer2_name']);
                $customer2_name45 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','46')->first(['customer2_name']);
                $customer2_name46 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','47')->first(['customer2_name']);
                $customer2_name47 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','48')->first(['customer2_name']);
                $customer2_name48 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','49')->first(['customer2_name']);
                $customer2_name49 = $customer2s->attributesToArray();
                $customer2s = Customer2::where('customer2_id','50')->first(['customer2_name']);
                $customer2_name50 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','51')->first(['customer2_name']);
                // $customer2_name51 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','52')->first(['customer2_name']);
                // $customer2_name52 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','53')->first(['customer2_name']);
                // $customer2_name53 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','54')->first(['customer2_name']);
                // $customer2_name54 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','55')->first(['customer2_name']);
                // $customer2_name55 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','56')->first(['customer2_name']);
                // $customer2_name56 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','57')->first(['customer2_name']);
                // $customer2_name57 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','58')->first(['customer2_name']);
                // $customer2_name58 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','59')->first(['customer2_name']);
                // $customer2_name59 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','60')->first(['customer2_name']);
                // $customer2_name60 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','61')->first(['customer2_name']);
                // $customer2_name61 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','62')->first(['customer2_name']);
                // $customer2_name62 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','63')->first(['customer2_name']);
                // $customer2_name63 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','64')->first(['customer2_name']);
                // $customer2_name64 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','65')->first(['customer2_name']);
                // $customer2_name65 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','66')->first(['customer2_name']);
                // $customer2_name66 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','67')->first(['customer2_name']);
                // $customer2_name67 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','68')->first(['customer2_name']);
                // $customer2_name68 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','69')->first(['customer2_name']);
                // $customer2_name69 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','70')->first(['customer2_name']);
                // $customer2_name70 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','71')->first(['customer2_name']);
                // $customer2_name71 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','72')->first(['customer2_name']);
                // $customer2_name72 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','73')->first(['customer2_name']);
                // $customer2_name73 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','74')->first(['customer2_name']);
                // $customer2_name74 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','75')->first(['customer2_name']);
                // $customer2_name75 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','76')->first(['customer2_name']);
                // $customer2_name76 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','77')->first(['customer2_name']);
                // $customer2_name77 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','78')->first(['customer2_name']);
                // $customer2_name78 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','79')->first(['customer2_name']);
                // $customer2_name79 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','80')->first(['customer2_name']);
                // $customer2_name80 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','81')->first(['customer2_name']);
                // $customer2_name81 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','82')->first(['customer2_name']);
                // $customer2_name82 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','83')->first(['customer2_name']);
                // $customer2_name83 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','84')->first(['customer2_name']);
                // $customer2_name84 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','85')->first(['customer2_name']);
                // $customer2_name85 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','86')->first(['customer2_name']);
                // $customer2_name86 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','87')->first(['customer2_name']);
                // $customer2_name87 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','88')->first(['customer2_name']);
                // $customer2_name88 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','89')->first(['customer2_name']);
                // $customer2_name89 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','90')->first(['customer2_name']);
                // $customer2_name90 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','91')->first(['customer2_name']);
                // $customer2_name91 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','92')->first(['customer2_name']);
                // $customer2_name92 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','93')->first(['customer2_name']);
                // $customer2_name93 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','94')->first(['customer2_name']);
                // $customer2_name94 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','95')->first(['customer2_name']);
                // $customer2_name95 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','96')->first(['customer2_name']);
                // $customer2_name96 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','97')->first(['customer2_name']);
                // $customer2_name97 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','98')->first(['customer2_name']);
                // $customer2_name98 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','99')->first(['customer2_name']);
                // $customer2_name99 = $customer2s->attributesToArray();
                // $customer2s = Customer2::where('customer2_id','100')->first(['customer2_name']);
                // $customer2_name100 = $customer2s->attributesToArray();
    
    
    
    
    
    
    
    
    
    
    
    
    
                return view('totalamount.index4_2023' , compact('customer2s','no_receipt_deposits',
                'customer2_name','customer2_name2','customer2_name3','customer2_name4','customer2_name5','customer2_name6','customer2_name7','customer2_name8','customer2_name9','customer2_name10',
                'customer2_name11','customer2_name12','customer2_name13','customer2_name14','customer2_name15','customer2_name16','customer2_name17','customer2_name18','customer2_name19','customer2_name20',
                'customer2_name21','customer2_name22','customer2_name23','customer2_name24','customer2_name25','customer2_name26','customer2_name27','customer2_name28','customer2_name29','customer2_name30',
                'customer2_name31','customer2_name32','customer2_name33','customer2_name34','customer2_name35','customer2_name36','customer2_name37','customer2_name38','customer2_name39','customer2_name40',
                'customer2_name41','customer2_name42','customer2_name43','customer2_name44','customer2_name45','customer2_name46','customer2_name47','customer2_name48','customer2_name49','customer2_name50',
                // 'customer2_name51','customer2_name52','customer2_name53','customer2_name54','customer2_name55','customer2_name56','customer2_name57','customer2_name58','customer2_name59','customer2_name60',
                // 'customer2_name61','customer2_name62','customer2_name63','customer2_name64','customer2_name65','customer2_name66','customer2_name67','customer2_name68','customer2_name69','customer2_name70',
                // 'customer2_name71','customer2_name72','customer2_name73','customer2_name74','customer2_name75','customer2_name76','customer2_name77','customer2_name78','customer2_name79','customer2_name80',
                // 'customer2_name81','customer2_name82','customer2_name83','customer2_name84','customer2_name85','customer2_name86','customer2_name87','customer2_name88','customer2_name89','customer2_name90',
                // 'customer2_name91','customer2_name92','customer2_name93','customer2_name94','customer2_name95','customer2_name96','customer2_name97','customer2_name98','customer2_name99','customer2_name100'
                         
            ));
        }
    
}