<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\MoneyCarriedForwardController;

use App\Http\Controllers\DetailController;
use App\Http\Controllers\WithinChinaDepositController;
use App\Http\Controllers\OtherCountryDepositController;
use App\Http\Controllers\HongkongDepositController;
use App\Http\Controllers\OutsourcingDepositController;
use App\Http\Controllers\OtherDepositController;
use App\Http\Controllers\NoReceiptDepositController;
use App\Http\Controllers\NoReceiptOtherDepositController;

use App\Http\Controllers\TaxCreditController;
use App\Http\Controllers\SalaryCreditController;
use App\Http\Controllers\MaterialCreditController;
use App\Http\Controllers\AuxiliaryMaterialCreditController;
use App\Http\Controllers\LogisticsCostController;
use App\Http\Controllers\EntertainmentExpenseController;
use App\Http\Controllers\TravelExpenseController;
use App\Http\Controllers\TicketFeeController;
use App\Http\Controllers\MiscellaneousExpenseController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\UtilityCostController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\NoReceiptCreditController;

use App\Http\Controllers\TotalamountController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Customer2Controller;
use App\Http\Controllers\RemarkController;

Route::get('/', [DetailController::class, 'index'])
 ->name('details.index');

// money_carried_forward
Route::get('/money_carried_forwards', [MoneyCarriedForwardController::class, 'show'])
 ->name('money_carried_forwards.show');

Route::get('/money_carried_forwards/create', [MoneyCarriedForwardController::class, 'create'])
 ->name('money_carried_forwards.create')
 ->where('money_carried_forward','[0-9]+');

Route::post('/money_carried_forwards/store', [MoneyCarriedForwardController::class, 'store'])
 ->name('money_carried_forwards.store')
 ->where('money_carried_forward','[0-9]+');

 Route::get('/money_carried_forwards/edit/{money_carried_forward}', [MoneyCarriedForwardController::class, 'edit'])
 ->name('money_carried_forwards.edit')
 ->where('money_carried_forward','[0-9]+');

 Route::post('/money_carried_forwards/update/{money_carried_forward}', [MoneyCarriedForwardController::class, 'update'])
 ->name('money_carried_forwards.update')
 ->where('money_carried_forward','[0-9]+');

 Route::delete('/money_carried_forwards/{money_carried_forward}/destroy',[MoneyCarriedForwardController::class,'destroy'])
 ->name('money_carried_forwards.destroy')
 ->where('money_carried_forward','[0-9]+');



// details route
// details japan_head_office_deposits
Route::get('/details', [DetailController::class, 'show'])
 ->name('details.show');

 Route::get('/details/show2', [DetailController::class, 'show2'])
 ->name('details.show2')
 ->where('detail','[0-9]+');

Route::get('/details/create', [DetailController::class, 'create'])
 ->name('details.create')
 ->where('detail','[0-9]+');

Route::post('/details/store', [DetailController::class, 'store'])
 ->name('details.store')
 ->where('detail','[0-9]+');

 Route::get('/details/edit/{detail}', [DetailController::class, 'edit'])
 ->name('details.edit')
 ->where('detail','[0-9]+');

 Route::post('/details/update/{detail}', [DetailController::class, 'update'])
 ->name('details.update')
 ->where('detail','[0-9]+');

 Route::post('/details/test', [DetailController::class, 'test'])
 ->name('details.test')
 ->where('detail','[0-9]+');

 Route::post('/details/name', [DetailController::class, 'name'])
 ->name('details.name')
 ->where('detail','[0-9]+');


 Route::delete('/details/{detail}/destroy',[DetailController::class,'destroy'])
 ->name('details.destroy')
 ->where('detail','[0-9]+');



// within_china_deposits
Route::get('/within_china_deposits', [WithinChinaDepositController::class, 'show'])
 ->name('within_china_deposits.show');

 Route::get('/within_china_deposits/show2', [WithinChinaDepositController::class, 'show2'])
 ->name('within_china_deposits.show2')
 ->where('within_china_deposit','[0-9]+');

Route::get('/within_china_deposits/create', [WithinChinaDepositController::class, 'create'])
 ->name('within_china_deposits.create')
 ->where('within_china_deposit','[0-9]+');

Route::post('/within_china_deposits/store', [WithinChinaDepositController::class, 'store'])
 ->name('within_china_deposits.store')
 ->where('within_china_deposit','[0-9]+');

 Route::get('/within_china_deposits/edit/{within_china_deposit}', [WithinChinaDepositController::class, 'edit'])
 ->name('within_china_deposits.edit')
 ->where('within_china_deposit','[0-9]+');

 Route::post('/within_china_deposits/update/{within_china_deposit}', [WithinChinaDepositController::class, 'update'])
 ->name('within_china_deposits.update')
 ->where('within_china_deposit','[0-9]+');

 Route::post('/within_china_deposits/test', [WithinChinaDepositController::class, 'test'])
 ->name('within_china_deposits.test')
 ->where('within_china_deposit','[0-9]+');
 
 Route::post('/within_china_deposits/name', [WithinChinaDepositController::class, 'name'])
 ->name('within_china_deposits.name')
 ->where('within_china_deposit','[0-9]+');

 Route::delete('/within_china_deposits/{within_china_deposit}/destroy',[WithinChinaDepositController::class,'destroy'])
 ->name('within_china_deposits.destroy')
 ->where('within_china_deposit','[0-9]+');


// other_country_deposits
Route::get('/other_country_deposits', [OtherCountryDepositController::class, 'show'])
 ->name('other_country_deposits.show');

 Route::get('/other_country_deposits/show2', [OtherCountryDepositController::class, 'show2'])
 ->name('other_country_deposits.show2')
 ->where('other_country_deposit','[0-9]+');

Route::get('/other_country_deposits/create', [OtherCountryDepositController::class, 'create'])
 ->name('other_country_deposits.create')
 ->where('other_country_deposit','[0-9]+');

Route::post('/other_country_deposits/store', [OtherCountryDepositController::class, 'store'])
 ->name('other_country_deposits.store')
 ->where('other_country_deposit','[0-9]+');

 Route::get('/other_country_deposits/edit/{other_country_deposit}', [OtherCountryDepositController::class, 'edit'])
 ->name('other_country_deposits.edit')
 ->where('other_country_deposit','[0-9]+');

 Route::post('/other_country_deposits/update/{other_country_deposit}', [OtherCountryDepositController::class, 'update'])
 ->name('other_country_deposits.update')
 ->where('other_country_deposit','[0-9]+');

 Route::post('/other_country_deposits/test', [OtherCountryDepositController::class, 'test'])
 ->name('other_country_deposits.test')
 ->where('other_country_deposit','[0-9]+');

 Route::post('/other_country_deposits/name', [OtherCountryDepositController::class, 'name'])
 ->name('other_country_deposits.name')
 ->where('other_country_deposit','[0-9]+');

 Route::delete('/other_country_deposits/{other_country_deposit}/destroy',[OtherCountryDepositController::class,'destroy'])
 ->name('other_country_deposits.destroy')
 ->where('other_country_deposit','[0-9]+');

 
 // hongkong_deposits
Route::get('/hongkong_deposits', [HongkongDepositController::class, 'show'])
->name('hongkong_deposits.show');

Route::get('/hongkong_deposits/show2', [HongkongDepositController::class, 'show2'])
->name('hongkong_deposits.show2')
->where('hongkong_deposit','[0-9]+');

Route::get('/hongkong_deposits/create', [HongkongDepositController::class, 'create'])
->name('hongkong_deposits.create')
->where('hongkong_deposit','[0-9]+');

Route::post('/hongkong_deposits/store', [HongkongDepositController::class, 'store'])
->name('hongkong_deposits.store')
->where('hongkong_deposit','[0-9]+');

Route::get('/hongkong_deposits/edit/{hongkong_deposit}', [HongkongDepositController::class, 'edit'])
->name('hongkong_deposits.edit')
->where('hongkong_deposit','[0-9]+');

Route::post('/hongkong_deposits/update/{hongkong_deposit}', [HongkongDepositController::class, 'update'])
->name('hongkong_deposits.update')
->where('hongkong_deposit','[0-9]+');

Route::post('/hongkong_deposits/test', [HongkongDepositController::class, 'test'])
->name('hongkong_deposits.test')
->where('hongkong_deposit','[0-9]+');

Route::post('/hongkong_deposits/name', [HongkongDepositController::class, 'name'])
->name('hongkong_deposits.name')
->where('hongkong_deposit','[0-9]+');

Route::delete('/hongkong_deposits/{hongkong_deposit}/destroy',[HongkongDepositController::class,'destroy'])
->name('hongkong_deposits.destroy')
->where('hongkong_deposit','[0-9]+');



 // outsourcing_deposits
 Route::get('/outsourcing_deposits', [OutsourcingDepositController::class, 'show'])
 ->name('outsourcing_deposits.show');

 Route::get('/outsourcing_deposits/show2', [OutsourcingDepositController::class, 'show2'])
 ->name('outsourcing_deposits.show2')
 ->where('outsourcing_deposit','[0-9]+');
 
 Route::get('/outsourcing_deposits/create', [OutsourcingDepositController::class, 'create'])
 ->name('outsourcing_deposits.create')
 ->where('outsourcing_deposit','[0-9]+');
 
 Route::post('/outsourcing_deposits/store', [OutsourcingDepositController::class, 'store'])
 ->name('outsourcing_deposits.store')
 ->where('outsourcing_deposit','[0-9]+');
 
 Route::get('/outsourcing_deposits/edit/{outsourcing_deposit}', [OutsourcingDepositController::class, 'edit'])
 ->name('outsourcing_deposits.edit')
 ->where('outsourcing_deposit','[0-9]+');
 
 Route::post('/outsourcing_deposits/update/{outsourcing_deposit}', [OutsourcingDepositController::class, 'update'])
 ->name('outsourcing_deposits.update')
 ->where('outsourcing_deposit','[0-9]+');

 Route::post('/outsourcing_deposits/test', [OutsourcingDepositController::class, 'test'])
 ->name('outsourcing_deposits.test')
 ->where('outsourcing_deposit','[0-9]+');

 Route::post('/outsourcing_deposits/name', [OutsourcingDepositController::class, 'name'])
 ->name('outsourcing_deposits.name')
 ->where('outsourcing_deposit','[0-9]+'); 

 Route::delete('/outsourcing_deposits/{outsourcing_deposit}/destroy',[OutsourcingDepositController::class,'destroy'])
->name('outsourcing_deposits.destroy')
->where('outsourcing_deposit','[0-9]+');

  
 // other_deposits
 Route::get('/other_deposits', [OtherDepositController::class, 'show'])
 ->name('other_deposits.show');
 
 Route::get('/other_deposits/show2', [OtherDepositController::class, 'show2'])
 ->name('other_deposits.show2')
 ->where('other_deposit','[0-9]+');

 Route::get('/other_deposits/create', [OtherDepositController::class, 'create'])
 ->name('other_deposits.create')
 ->where('other_deposit','[0-9]+');
 
 Route::post('/other_deposits/store', [OtherDepositController::class, 'store'])
 ->name('other_deposits.store')
 ->where('other_deposit','[0-9]+');
 
 Route::get('/other_deposits/edit/{other_deposit}', [OtherDepositController::class, 'edit'])
 ->name('other_deposits.edit')
 ->where('other_deposit','[0-9]+');
 
 Route::post('/other_deposits/update/{other_deposit}', [OtherDepositController::class, 'update'])
 ->name('other_deposits.update')
 ->where('other_deposit','[0-9]+');

 Route::post('/other_deposits/test', [OtherDepositController::class, 'test'])
 ->name('other_deposits.test')
 ->where('other_deposit','[0-9]+');

 Route::post('/other_deposits/name', [OtherDepositController::class, 'name'])
->name('other_deposits.name')
->where('other_deposit','[0-9]+');

 Route::delete('/other_deposits/{other_deposit}/destroy',[OtherDepositController::class,'destroy'])
 ->name('other_deposits.destroy')
 ->where('other_deposit','[0-9]+');
 

  // no_receipt_deposits
  Route::get('/no_receipt_deposits', [NoReceiptDepositController::class, 'show'])
  ->name('no_receipt_deposits.show');

  Route::get('/no_receipt_deposits/show2', [NoReceiptDepositController::class, 'show2'])
  ->name('no_receipt_deposits.show2')
  ->where('no_receipt_deposit','[0-9]+');
 
  Route::get('/no_receipt_deposits/create', [NoReceiptDepositController::class, 'create'])
  ->name('no_receipt_deposits.create')
  ->where('no_receipt_deposit','[0-9]+');
  
  Route::post('/no_receipt_deposits/store', [NoReceiptDepositController::class, 'store'])
  ->name('no_receipt_deposits.store')
  ->where('no_receipt_deposit','[0-9]+');
  
  Route::get('/no_receipt_deposits/edit/{no_receipt_deposit}', [NoReceiptDepositController::class, 'edit'])
  ->name('no_receipt_deposits.edit')
  ->where('no_receipt_deposit','[0-9]+');
  
  Route::post('/no_receipt_deposits/update/{no_receipt_deposit}', [NoReceiptDepositController::class, 'update'])
  ->name('no_receipt_deposits.update')
  ->where('no_receipt_deposit','[0-9]+');
 
  Route::post('/no_receipt_deposits/test', [NoReceiptDepositController::class, 'test'])
  ->name('no_receipt_deposits.test')
  ->where('no_receipt_deposit','[0-9]+');

  Route::post('/no_receipt_deposits/name', [NoReceiptDepositController::class, 'name'])
  ->name('no_receipt_deposits.name')
  ->where('no_receipt_deposit','[0-9]+');
  
  Route::delete('/no_receipt_deposits/{no_receipt_deposit}/destroy',[NoReceiptDepositController::class,'destroy'])
  ->name('no_receipt_deposits.destroy')
  ->where('no_receipt_deposit','[0-9]+');
 

  // no_receipt_other_deposits
  Route::get('/no_receipt_other_deposits', [NoReceiptOtherDepositController::class, 'show'])
  ->name('no_receipt_other_deposits.show');

  Route::get('/no_receipt_other_deposits/show2', [NoReceiptOtherDepositController::class, 'show2'])
  ->name('no_receipt_other_deposits.show2')
  ->where('no_receipt_other_deposit','[0-9]+');
  
  Route::get('/no_receipt_other_deposits/create', [NoReceiptOtherDepositController::class, 'create'])
  ->name('no_receipt_other_deposits.create')
  ->where('no_receipt_other_deposit','[0-9]+');
  
  Route::post('/no_receipt_other_deposits/store', [NoReceiptOtherDepositController::class, 'store'])
  ->name('no_receipt_other_deposits.store')
  ->where('no_receipt_other_deposit','[0-9]+');
  
  Route::get('/no_receipt_other_deposits/edit/{no_receipt_other_deposit}', [NoReceiptOtherDepositController::class, 'edit'])
  ->name('no_receipt_other_deposits.edit')
  ->where('no_receipt_other_deposit','[0-9]+');
  
  Route::post('/no_receipt_other_deposits/update/{no_receipt_other_deposit}', [NoReceiptOtherDepositController::class, 'update'])
  ->name('no_receipt_other_deposits.update')
  ->where('no_receipt_other_deposit','[0-9]+');
 
  Route::post('/no_receipt_other_deposits/test', [NoReceiptOtherDepositController::class, 'test'])
  ->name('no_receipt_other_deposits.test')
  ->where('no_receipt_other_deposit','[0-9]+');

  Route::post('/no_receipt_other_deposits/name', [NoReceiptOtherDepositController::class, 'name'])
  ->name('no_receipt_other_deposits.name')
  ->where('no_receipt_other_deposit','[0-9]+');

  Route::delete('/no_receipt_other_deposits/{no_receipt_other_deposit}/destroy',[NoReceiptOtherDepositController::class,'destroy'])
  ->name('no_receipt_other_deposits.destroy')
  ->where('no_receipt_other_deposit','[0-9]+');

 

// credits route
//tax_credits
 Route::get('/tax_credits', [TaxCreditController::class, 'show'])
 ->name('tax_credits.show');

 Route::get('/tax_credits/show2', [TaxCreditController::class, 'show2'])
 ->name('tax_credits.show2')
 ->where('tax_credit','[0-9]+'); 

Route::get('/tax_credits/create', [TaxCreditController::class, 'create'])
 ->name('tax_credits.create')
 ->where('tax_credit','[0-9]+');

Route::post('/tax_credits/store', [TaxCreditController::class, 'store'])
 ->name('tax_credits.store')
 ->where('tax_credit','[0-9]+');

 Route::get('/tax_credits/edit/{tax_credit}', [TaxCreditController::class, 'edit'])
 ->name('tax_credits.edit')
 ->where('tax_credit','[0-9]+');

 Route::post('/tax_credits/update/{tax_credit}', [TaxCreditController::class, 'update'])
 ->name('tax_credits.update')
 ->where('tax_credit','[0-9]+');

 Route::post('/tax_credits/test', [TaxCreditController::class, 'test'])
 ->name('tax_credits.test')
 ->where('tax_credit','[0-9]+');

 Route::post('/tax_credits/name', [TaxCreditController::class, 'name'])
 ->name('tax_credits.name')
 ->where('tax_credit','[0-9]+');

 Route::delete('/tax_credits/{tax_credit}/destroy',[TaxCreditController::class,'destroy'])
 ->name('tax_credits.destroy')
 ->where('tax_credit','[0-9]+');


 // salary_credits
 Route::get('/salary_credits', [SalaryCreditController::class, 'show'])
 ->name('salary_credits.show');

 Route::get('/salary_credits/show2', [SalaryCreditController::class, 'show2'])
->name('salary_credits.show2')
->where('salary_credit','[0-9]+');

Route::get('/salary_credits/create', [SalaryCreditController::class, 'create'])
 ->name('salary_credits.create')
 ->where('salary_credit','[0-9]+');

Route::post('/salary_credits/store', [SalaryCreditController::class, 'store'])
 ->name('salary_credits.store')
 ->where('salary_credit','[0-9]+');

 Route::get('/salary_credits/edit/{salary_credit}', [SalaryCreditController::class, 'edit'])
 ->name('salary_credits.edit')
 ->where('salary_credit','[0-9]+');

 Route::post('/salary_credits/update/{salary_credit}', [SalaryCreditController::class, 'update'])
 ->name('salary_credits.update')
 ->where('salary_credit','[0-9]+');

 Route::post('/salary_credits/test', [SalaryCreditController::class, 'test'])
 ->name('salary_credits.test')
 ->where('salary_credit','[0-9]+');

 Route::post('/salary_credits/name', [SalaryCreditController::class, 'name'])
 ->name('salary_credits.name')
 ->where('salary_credit','[0-9]+');

 Route::delete('/salary_credits/{salary_credit}/destroy',[SalaryCreditController::class,'destroy'])
 ->name('salary_credits.destroy')
 ->where('salary_credit','[0-9]+');


// material_credits
Route::get('/material_credits', [MaterialCreditController::class, 'show'])
->name('material_credits.show');

Route::get('/material_credits/show2', [MaterialCreditController::class, 'show2'])
->name('material_credits.show2')
->where('material_credit','[0-9]+');

 Route::get('/material_credits/create', [MaterialCreditController::class, 'create'])
  ->name('material_credits.create')
  ->where('material_credit','[0-9]+');
 
 Route::post('/material_credits/store', [MaterialCreditController::class, 'store'])
  ->name('material_credits.store')
  ->where('material_credit','[0-9]+');
 
  Route::get('/material_credits/edit/{material_credit}', [MaterialCreditController::class, 'edit'])
  ->name('material_credits.edit')
  ->where('material_credit','[0-9]+');
 
  Route::post('/material_credits/update/{material_credit}', [MaterialCreditController::class, 'update'])
  ->name('material_credits.update')
  ->where('material_credit','[0-9]+');

  Route::post('/material_credits/test', [MaterialCreditController::class, 'test'])
  ->name('material_credits.test')
  ->where('material_credit','[0-9]+');

  Route::post('/material_credits/name', [MaterialCreditController::class, 'name'])
  ->name('material_credits.name')
  ->where('material_credit','[0-9]+');

  Route::delete('/material_credits/{material_credit}/destroy',[MaterialCreditController::class,'destroy'])
  ->name('material_credits.destroy')
  ->where('material_credit','[0-9]+');
 
 
  // auxiliary_material_credits
  Route::get('/auxiliary_material_credits', [AuxiliaryMaterialCreditController::class, 'show'])
  ->name('auxiliary_material_credits.show');

  Route::get('/auxiliary_material_credits/show2', [AuxiliaryMaterialCreditController::class, 'show2'])
  ->name('auxiliary_material_credits.show2')
  ->where('auxiliary_material_credit','[0-9]+');
  
   Route::get('/auxiliary_material_credits/create', [AuxiliaryMaterialCreditController::class, 'create'])
    ->name('auxiliary_material_credits.create')
    ->where('auxiliary_material_credit','[0-9]+');
   
   Route::post('/auxiliary_material_credits/store', [AuxiliaryMaterialCreditController::class, 'store'])
    ->name('auxiliary_material_credits.store')
    ->where('auxiliary_material_credit','[0-9]+');
   
  Route::get('/auxiliary_material_credits/edit/{auxiliary_material_credit}', [AuxiliaryMaterialCreditController::class, 'edit'])
  ->name('auxiliary_material_credits.edit')
  ->where('auxiliary_material_credit','[0-9]+');
  
  Route::post('/auxiliary_material_credits/update/{auxiliary_material_credit}', [AuxiliaryMaterialCreditController::class, 'update'])
  ->name('auxiliary_material_credits.update')
  ->where('auxiliary_material_credit','[0-9]+');

  Route::post('/auxiliary_material_credits/test', [AuxiliaryMaterialCreditController::class, 'test'])
  ->name('auxiliary_material_credits.test')
  ->where('auxiliary_material_credit','[0-9]+');
  
  Route::post('/auxiliary_material_credits/name', [AuxiliaryMaterialCreditController::class, 'name'])
  ->name('auxiliary_material_credits.name')
  ->where('auxiliary_material_credit','[0-9]+');
  
  Route::delete('/auxiliary_material_credits/{auxiliary_material_credit}/destroy',[AuxiliaryMaterialCreditController::class,'destroy'])
  ->name('auxiliary_material_credits.destroy')
  ->where('auxiliary_material_credit','[0-9]+');

 
  // logistics_cost
  Route::get('/logistics_costs', [LogisticsCostController::class, 'show'])
  ->name('logistics_costs.show');

  Route::get('/logistics_costs/show2', [LogisticsCostController::class, 'show2'])
  ->name('logistics_costs.show2')
  ->where('logistics_cost','[0-9]+');

 Route::get('/logistics_costs/create', [LogisticsCostController::class, 'create'])
  ->name('logistics_costs.create')
  ->where('logistics_cost','[0-9]+');
 
 Route::post('/logistics_costs/store', [LogisticsCostController::class, 'store'])
  ->name('logistics_costs.store')
  ->where('logistics_cost','[0-9]+');
 
  Route::get('/logistics_costs/edit/{logistics_cost}', [LogisticsCostController::class, 'edit'])
  ->name('logistics_costs.edit')
  ->where('logistics_cost','[0-9]+');
 
  Route::post('/logistics_costs/update/{logistics_cost}', [LogisticsCostController::class, 'update'])
  ->name('logistics_costs.update')
  ->where('logistics_cost','[0-9]+');

  Route::post('/logistics_costs/test', [LogisticsCostController::class, 'test'])
  ->name('logistics_costs.test')
  ->where('logistics_cost','[0-9]+');

  Route::post('/logistics_costs/name', [LogisticsCostController::class, 'name'])
  ->name('logistics_costs.name')
  ->where('logistics_cost','[0-9]+');

  Route::delete('/logistics_costs/{logistics_cost}/destroy',[LogisticsCostController::class,'destroy'])
  ->name('logistics_costs.destroy')
  ->where('logistics_cost','[0-9]+');


  // entertainment_expenses
  Route::get('/entertainment_expenses', [EntertainmentExpenseController::class, 'show'])
  ->name('entertainment_expenses.show');

  Route::get('/entertainment_expenses/show2', [EntertainmentExpenseController::class, 'show2'])
  ->name('entertainment_expenses.show2')
  ->where('entertainment_expense','[0-9]+');

  Route::get('/entertainment_expenses/create', [EntertainmentExpenseController::class, 'create'])
  ->name('entertainment_expenses.create')
  ->where('entertainment_expense','[0-9]+');
  
  Route::post('/entertainment_expenses/store', [EntertainmentExpenseController::class, 'store'])
  ->name('entertainment_expenses.store')
  ->where('entertainment_expense','[0-9]+');
  
  Route::get('/entertainment_expenses/edit/{entertainment_expense}', [EntertainmentExpenseController::class, 'edit'])
  ->name('entertainment_expenses.edit')
  ->where('entertainment_expense','[0-9]+');
  
  Route::post('/entertainment_expenses/update/{entertainment_expense}', [EntertainmentExpenseController::class, 'update'])
  ->name('entertainment_expenses.update')
  ->where('entertainment_expense','[0-9]+');

  Route::post('/entertainment_expenses/test', [EntertainmentExpenseController::class, 'test'])
  ->name('entertainment_expenses.test')
  ->where('entertainment_expense','[0-9]+');

  Route::post('/entertainment_expenses/name', [EntertainmentExpenseController::class, 'name'])
  ->name('entertainment_expenses.name')
  ->where('entertainment_expense','[0-9]+');

  Route::delete('/entertainment_expenses/{entertainment_expense}/destroy',[EntertainmentExpenseController::class,'destroy'])
  ->name('entertainment_expenses.destroy')
  ->where('entertainment_expense','[0-9]+');


  // travel_expenses
  Route::get('/travel_expenses', [TravelExpenseController::class, 'show'])
  ->name('travel_expenses.show');

  Route::get('/travel_expenses/show2', [TravelExpenseController::class, 'show2'])
  ->name('travel_expenses.show2')
  ->where('travel_expense','[0-9]+');
  
  Route::get('/travel_expenses/create', [TravelExpenseController::class, 'create'])
  ->name('travel_expenses.create')
  ->where('travel_expense','[0-9]+');
  
  Route::post('/travel_expenses/store', [TravelExpenseController::class, 'store'])
  ->name('travel_expenses.store')
  ->where('travel_expense','[0-9]+');
  
  Route::get('/travel_expenses/edit/{travel_expense}', [TravelExpenseController::class, 'edit'])
  ->name('travel_expenses.edit')
  ->where('travel_expense','[0-9]+');
  
  Route::post('/travel_expenses/update/{travel_expense}', [TravelExpenseController::class, 'update'])
  ->name('travel_expenses.update')
  ->where('travel_expense','[0-9]+');

  Route::post('/travel_expenses/test', [TravelExpenseController::class, 'test'])
  ->name('travel_expenses.test')
  ->where('travel_expense','[0-9]+');

  Route::post('/travel_expenses/name', [TravelExpenseController::class, 'name'])
  ->name('travel_expenses.name')
  ->where('travel_expense','[0-9]+');

  Route::delete('/travel_expenses/{travel_expense}/destroy',[TravelExpenseController::class,'destroy'])
  ->name('travel_expenses.destroy')
  ->where('travel_expense','[0-9]+');


  // ticket_fees
  Route::get('/ticket_fees', [TicketFeeController::class, 'show'])
  ->name('ticket_fees.show');

  Route::get('/ticket_fees/show2', [TicketFeeController::class, 'show2'])
  ->name('ticket_fees.show2')
  ->where('ticket_fee','[0-9]+');  
  
  Route::get('/ticket_fees/create', [TicketFeeController::class, 'create'])
  ->name('ticket_fees.create')
  ->where('ticket_fee','[0-9]+');
  
  Route::post('/ticket_fees/store', [TicketFeeController::class, 'store'])
  ->name('ticket_fees.store')
  ->where('ticket_fee','[0-9]+');
  
  Route::get('/ticket_fees/edit/{ticket_fee}', [TicketFeeController::class, 'edit'])
  ->name('ticket_fees.edit')
  ->where('ticket_fee','[0-9]+');
  
  Route::post('/ticket_fees/update/{ticket_fee}', [TicketFeeController::class, 'update'])
  ->name('ticket_fees.update')
  ->where('ticket_fee','[0-9]+');

  Route::post('/ticket_fees/test', [TicketFeeController::class, 'test'])
  ->name('ticket_fees.test')
  ->where('ticket_fee','[0-9]+');

  Route::post('/ticket_fees/name', [TicketFeeController::class, 'name'])
  ->name('ticket_fees.name')
  ->where('ticket_fee','[0-9]+');

  Route::delete('/ticket_fees/{ticket_fee}/destroy',[TicketFeeController::class,'destroy'])
  ->name('ticket_fees.destroy')
  ->where('ticket_fee','[0-9]+');



  // miscellaneous_expenses
  Route::get('/miscellaneous_expenses', [MiscellaneousExpenseController::class, 'show'])
  ->name('miscellaneous_expenses.show');

  Route::get('/miscellaneous_expenses/show2', [MiscellaneousExpenseController::class, 'show2'])
->name('miscellaneous_expenses.show2')
->where('miscellaneous_expense','[0-9]+');
  
  Route::get('/miscellaneous_expenses/create', [MiscellaneousExpenseController::class, 'create'])
  ->name('miscellaneous_expenses.create')
  ->where('miscellaneous_expense','[0-9]+');
  
  Route::post('/miscellaneous_expenses/store', [MiscellaneousExpenseController::class, 'store'])
  ->name('miscellaneous_expenses.store')
  ->where('miscellaneous_expense','[0-9]+');
  
  Route::get('/miscellaneous_expenses/edit/{miscellaneous_expense}', [MiscellaneousExpenseController::class, 'edit'])
  ->name('miscellaneous_expenses.edit')
  ->where('miscellaneous_expense','[0-9]+');
  
  Route::post('/miscellaneous_expenses/update/{miscellaneous_expense}', [MiscellaneousExpenseController::class, 'update'])
  ->name('miscellaneous_expenses.update')
  ->where('miscellaneous_expense','[0-9]+');

  Route::post('/miscellaneous_expenses/test', [MiscellaneousExpenseController::class, 'test'])
  ->name('miscellaneous_expenses.test')
  ->where('miscellaneous_expense','[0-9]+');

  Route::post('/miscellaneous_expenses/name', [MiscellaneousExpenseController::class, 'name'])
  ->name('miscellaneous_expenses.name')
  ->where('miscellaneous_expense','[0-9]+');

  Route::delete('/miscellaneous_expenses/{miscellaneous_expense}/destroy',[MiscellaneousExpenseController::class,'destroy'])
  ->name('miscellaneous_expenses.destroy')
  ->where('miscellaneous_expense','[0-9]+');


  // others
  Route::get('/others', [OtherController::class, 'show'])
  ->name('others.show');

  Route::get('/others/show2', [OtherController::class, 'show2'])
  ->name('others.show2')
  ->where('other','[0-9]+');
  
  Route::get('/others/create', [OtherController::class, 'create'])
  ->name('others.create')
  ->where('other','[0-9]+');
  
  Route::post('/others/store', [OtherController::class, 'store'])
  ->name('others.store')
  ->where('other','[0-9]+');
  
  Route::get('/others/edit/{other}', [OtherController::class, 'edit'])
  ->name('others.edit')
  ->where('other','[0-9]+');
  
  Route::post('/others/update/{other}', [OtherController::class, 'update'])
  ->name('others.update')
  ->where('other','[0-9]+');

  Route::post('/others/test', [OtherController::class, 'test'])
  ->name('others.test')
  ->where('other','[0-9]+');

  Route::post('/others/name', [OtherController::class, 'name'])
  ->name('others.name')
  ->where('other','[0-9]+');

  Route::delete('/others/{other}/destroy',[OtherController::class,'destroy'])
  ->name('others.destroy')
  ->where('other','[0-9]+');


  // utility_cost
  Route::get('/utility_costs', [UtilityCostController::class, 'show'])
  ->name('utility_costs.show');

  Route::get('/utility_costs/show2', [UtilityCostController::class, 'show2'])
  ->name('utility_costs.show2')
  ->where('utility_cost','[0-9]+');
 
 Route::get('/utility_costs/create', [UtilityCostController::class, 'create'])
  ->name('utility_costs.create')
  ->where('utility_cost','[0-9]+');
 
 Route::post('/utility_costs/store', [UtilityCostController::class, 'store'])
  ->name('utility_costs.store')
  ->where('utility_cost','[0-9]+');
 
  Route::get('/utility_costs/edit/{utility_cost}', [UtilityCostController::class, 'edit'])
  ->name('utility_costs.edit')
  ->where('utility_cost','[0-9]+');
 
  Route::post('/utility_costs/update/{utility_cost}', [UtilityCostController::class, 'update'])
  ->name('utility_costs.update')
  ->where('utility_cost','[0-9]+');

  Route::post('/utility_costs/test', [UtilityCostController::class, 'test'])
  ->name('utility_costs.test')
  ->where('utility_cost','[0-9]+');

  Route::post('/utility_costs/name', [UtilityCostController::class, 'name'])
  ->name('utility_costs.name')
  ->where('utility_cost','[0-9]+');

  Route::delete('/utility_costs/{utility_cost}/destroy',[UtilityCostController::class,'destroy'])
  ->name('utility_costs.destroy')
  ->where('utility_cost','[0-9]+');


  // insurances
  Route::get('/insurances', [InsuranceController::class, 'show'])
  ->name('insurances.show');

  Route::get('/insurances/show2', [InsuranceController::class, 'show2'])
  ->name('insurances.show2')
  ->where('insurance','[0-9]+');
  
  Route::get('/insurances/create', [InsuranceController::class, 'create'])
  ->name('insurances.create')
  ->where('insurance','[0-9]+');
  
  Route::post('/insurances/store', [InsuranceController::class, 'store'])
  ->name('insurances.store')
  ->where('insurance','[0-9]+');
  
  Route::get('/insurances/edit/{insurance}', [InsuranceController::class, 'edit'])
  ->name('insurances.edit')
  ->where('insurance','[0-9]+');
  
  Route::post('/insurances/update/{insurance}', [InsuranceController::class, 'update'])
  ->name('insurances.update')
  ->where('insurance','[0-9]+');

  Route::post('/insurances/test', [InsuranceController::class, 'test'])
  ->name('insurances.test')
  ->where('insurance','[0-9]+');

  Route::post('/insurances/name', [InsuranceController::class, 'name'])
  ->name('insurances.name')
  ->where('insurance','[0-9]+');

  Route::delete('/insurances/{insurance}/destroy',[InsuranceController::class,'destroy'])
  ->name('insurances.destroy')
  ->where('insurance','[0-9]+');


  // no_receipt_credits
  Route::get('/no_receipt_credits', [NoReceiptCreditController::class, 'show'])
  ->name('no_receipt_credits.show');

  Route::get('/no_receipt_credits/show2', [NoReceiptCreditController::class, 'show2'])
  ->name('no_receipt_credits.show2')
  ->where('no_receipt_credit','[0-9]+');
  
  Route::get('/no_receipt_credits/create', [NoReceiptCreditController::class, 'create'])
  ->name('no_receipt_credits.create')
  ->where('no_receipt_credit','[0-9]+');
  
  Route::post('/no_receipt_credits/store', [NoReceiptCreditController::class, 'store'])
  ->name('no_receipt_credits.store')
  ->where('no_receipt_credit','[0-9]+');
  
  Route::get('/no_receipt_credits/edit/{no_receipt_credit}', [NoReceiptCreditController::class, 'edit'])
  ->name('no_receipt_credits.edit')
  ->where('no_receipt_credit','[0-9]+');
  
  Route::post('/no_receipt_credits/update/{no_receipt_credit}', [NoReceiptCreditController::class, 'update'])
  ->name('no_receipt_credits.update')
  ->where('no_receipt_credit','[0-9]+');

  Route::post('/no_receipt_credits/test', [NoReceiptCreditController::class, 'test'])
  ->name('no_receipt_credits.test')
  ->where('no_receipt_credit','[0-9]+');

  Route::post('/no_receipt_credits/name', [NoReceiptCreditController::class, 'name'])
  ->name('no_receipt_credits.name')
  ->where('no_receipt_credit','[0-9]+');

  Route::delete('/no_receipt_credits/{no_receipt_credit}/destroy',[NoReceiptCreditController::class,'destroy'])
  ->name('no_receipt_credits.destroy')
  ->where('no_receipt_credit','[0-9]+');


  // totalamount
  Route::get('/totalamount/index', [TotalamountController::class, 'index'])
  ->name('totalamount.index');

  Route::get('/totalamount/index2', [TotalamountController::class, 'index2'])
  ->name('totalamount.index2');

  Route::get('/totalamount/index3', [TotalamountController::class, 'index3'])
  ->name('totalamount.index3');

  Route::get('/totalamount/index3_2023', [TotalamountController::class, 'index3_2023'])
  ->name('totalamount.index3_2023');


  Route::get('/totalamount/index4', [TotalamountController::class, 'index4'])
  ->name('totalamount.index4');

  Route::get('/totalamount/index4_2023', [TotalamountController::class, 'index4_2023'])
  ->name('totalamount.index4_2023');



 // customers 
 Route::get('/customers', [CustomerController::class, 'show'])
 ->name('customers.show');
 
 Route::get('/customers/add', [CustomerController::class, 'add'])
 ->name('customers.add')
 ->where('customer','[0-9]+');

 Route::post('/customers/add_customer', [CustomerController::class, 'add_customer'])
 ->name('customers.add_customer')
 ->where('customer','[0-9]+');

 Route::get('/customers/edit/{customer}', [CustomerController::class, 'edit'])
 ->name('customers.edit')
 ->where('customer','[0-9]+');

 Route::post('/customers/update/{customer}', [CustomerController::class, 'update'])
 ->name('customers.update')
 ->where('customer','[0-9]+');

 Route::delete('/customers/{customer}/destroy',[CustomerController::class,'destroy'])
 ->name('customers.destroy')
 ->where('customer','[0-9]+');

 Route::post('/customers/name', [CustomerController::class, 'name'])
 ->name('customers.name')
 ->where('customer','[0-9]+');



// cutsomer2s
Route::get('/customer2s', [Customer2Controller::class, 'show'])
->name('customer2s.show');

Route::get('/customer2s/add', [Customer2Controller::class, 'add'])
->name('customer2s.add')
->where('customer2','[0-9]+');

Route::post('/customer2s/add_customer', [Customer2Controller::class, 'add_customer'])
->name('customer2s.add_customer')
->where('customer2','[0-9]+');

Route::get('/customer2s/edit/{customer2}', [Customer2Controller::class, 'edit'])
->name('customer2s.edit')
->where('customer2','[0-9]+');

Route::post('/customer2s/update/{customer2}', [Customer2Controller::class, 'update'])
->name('customer2s.update')
->where('customer2','[0-9]+');

Route::delete('/customer2s/{customer2}/destroy',[Customer2Controller::class,'destroy'])
->name('customer2s.destroy')
->where('customer2','[0-9]+');

Route::post('/customer2s/name', [Customer2Controller::class, 'name'])
->name('customer2s.name')
->where('customer2','[0-9]+');


  // remarks
  Route::get('/remarks', [RemarkController::class, 'show'])
  ->name('remarks.show');
  
  Route::get('/remarks/create', [RemarkController::class, 'create'])
  ->name('remarks.create')
  ->where('remark','[0-9]+');
  
  Route::post('/remarks/store', [RemarkController::class, 'store'])
  ->name('remarks.store')
  ->where('remark','[0-9]+');
  
  Route::get('/remarks/edit/{remark}', [RemarkController::class, 'edit'])
  ->name('remarks.edit')
  ->where('remark','[0-9]+');
  
  Route::post('/remarks/update/{remark}', [RemarkController::class, 'update'])
  ->name('remarks.update')
  ->where('remark','[0-9]+');

  Route::delete('/remarks/{remark}/destroy',[RemarkController::class,'destroy'])
  ->name('remarks.destroy')
  ->where('remark','[0-9]+');

  



    
  
      

  
 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
