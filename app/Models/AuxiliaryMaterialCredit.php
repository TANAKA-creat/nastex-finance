<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class AuxiliaryMaterialCredit extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable =[
        'datetime_auxiliary_material_credit',
        'auxiliary_material_credit_creditor',
        'rmb_auxiliary_material_credit',
        'usd_auxiliary_material_credit',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getAuxiliaryMaterialCredit($from, $until)
    {
        $auxiliary_material_credit = AuxiliaryMaterialCredit::whereBetween('datetime_auxiliary_material_credit', [$from, $until])->get();

        return $auxiliary_material_credit;
    }

    public static function getAuxiliaryMaterialCreditName($auxiliary_material_credit_creditor, $from, $until)
    {
        $auxiliary_material_credit = AuxiliaryMaterialCredit::where('auxiliary_material_credit_creditor',$auxiliary_material_credit_creditor)->whereBetween('datetime_auxiliary_material_credit', [$from, $until])->get();

        return $auxiliary_material_credit;
    }


}
