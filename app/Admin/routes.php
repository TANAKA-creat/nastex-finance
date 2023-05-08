<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\DetailController;
use App\Admin\Controllers\TaxCreditController;
use App\Admin\Controllers\AuxiliaryMaterialCreditController;
use App\Admin\Controllers\EntertainmentExpenseController;
use App\Admin\Controllers\HongkongDepositController;
use App\Admin\Controllers\InsuranceController;
use App\Admin\Controllers\LogisticsCostController;
use App\Admin\Controllers\MaterialCreditController;
use App\Admin\Controllers\MiscellaneousExpenseController;
use App\Admin\Controllers\OtherController;
use App\Admin\Controllers\OtherCountryDepositController;
use App\Admin\Controllers\OtherDepositController;
use App\Admin\Controllers\OutsourcingDepositController;
use App\Admin\Controllers\SalaryCreditController;
use App\Admin\Controllers\TicketFeeController;
use App\Admin\Controllers\TravelExpenseController;
use App\Admin\Controllers\UtilityCostController;
use App\Admin\Controllers\WithinChinaDepositController;
use App\Admin\Controllers\NoReceiptDepositController;
use App\Admin\Controllers\NoReceiptCreditController;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('details', DetailController::class);
    $router->resource('tax_credits', TaxCreditController::class);
    $router->resource('auxiliary_material_credits', AuxiliaryMaterialCreditController::class);
    $router->resource('entertainment_expenses', EntertainmentExpenseController::class);
    $router->resource('hongkong_deposits', HongkongDepositController::class);
    $router->resource('insurances', InsuranceController::class);
    $router->resource('logistics_costs', LogisticsCostController::class);
    $router->resource('material_credits', MaterialCreditController::class);
    $router->resource('miscellaneous_expenses', MiscellaneousExpenseController::class);
    $router->resource('others', OtherController::class);
    $router->resource('other_country_deposits', OtherCountryDepositController::class);
    $router->resource('other_deposits', OtherDepositController::class);
    $router->resource('outsourcing_deposits', OutsourcingDepositController::class);
    $router->resource('salary_credits', SalaryCreditController::class);
    $router->resource('ticket_fees', TicketFeeController::class);
    $router->resource('travel_expenses', TravelExpenseController::class);
    $router->resource('utility_costs', UtilityCostController::class);
    $router->resource('within_china_deposits', WithinChinaDepositController::class);
    $router->resource('no_receipt_deposits', NoReceiptDepositController::class);
    $router->resource('no_receipt_credits', NoReceiptCreditController::class);
});
