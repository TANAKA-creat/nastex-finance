<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function auxiliary_material_credits()
    {
        return $this->hasMany('App\Models\AuxiliaryMaterialCredit');
    }

    public function details()
    {
        return $this->hasMany('App\Models\Detail');
    }

    public function entertainment_expenses()
    {
        return $this->hasMany('App\Models\EntertainmentExpense');
    }

    public function insurances()
    {
        return $this->hasMany('App\Models\Insurance');
    }

    public function logistics_costs()
    {
        return $this->hasMany('App\Models\LogisticsCost');
    }

    public function material_credits()
    {
        return $this->hasMany('App\Models\MaterialCredit');
    }

    public function miscellaneous_expenses()
    {
        return $this->hasMany('App\Models\MiscellaneousExpense');
    }

    public function others()
    {
        return $this->hasMany('App\Models\Other');
    }

    public function salary_credits()
    {
        return $this->hasMany('App\Models\SalaryCredit');
    }

    public function tax_credits()
    {
        return $this->hasMany('App\Models\TaxCredit');
    }

    public function ticket_fees()
    {
        return $this->hasMany('App\Models\TicketFee');
    }

    public function travel_expenses()
    {
        return $this->hasMany('App\Models\TravelExpense');
    }

    public function utility_costs()
    {
        return $this->hasMany('App\Models\UtilityCost');
    }

    public function within_china_deposits()
    {
        return $this->hasMany('App\Models\WithinChinaDeposit');
    }

    public function other_country_deposits()
    {
        return $this->hasMany('App\Models\OtherCountryDeposit');
    }

    public function hongkong_deposits()
    {
        return $this->hasMany('App\Models\HongkongDeposit');
    }

    public function outsourcing_deposits()
    {
        return $this->hasMany('App\Models\OutsourcingDeposit');
    }

    public function other_deposits()
    {
        return $this->hasMany('App\Models\OtherDeposit');
    }

    public function money_carried_forwards()
    {
        return $this->hasMany('App\Models\MoneyCarriedForward');
    }

    public function no_receipt_deposits()
    {
        return $this->hasMany('App\Models\NoReceiptDeposit');
    }

    public function no_receipt_credits()
    {
        return $this->hasMany('App\Models\NoReceiptCredit');
    }
    
    public function customers()
    {
        return $this->hasMany('App\Models\Customer');
    }
    
    public function customer2s()
    {
        return $this->hasMany('App\Models\Customer2');
    }

}
