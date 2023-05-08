<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class MaterialCredit extends Model
{
    use HasFactory;

    use Sortable;

    protected $fillable =[
        'datetime_material_credit',
        'material_creditor',
        'rmb_material_credit',
        'usd_material_credit',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function getMaterialCredit($from, $until)
    {
        $material_credit = MaterialCredit::whereBetween('datetime_material_credit', [$from, $until])->get();

        return $material_credit;
    }

    public static function getMaterialCreditName($material_creditor, $from, $until)
    {
        $material_credit = MaterialCredit::where('material_creditor',$material_creditor)->whereBetween('datetime_material_credit', [$from, $until])->get();

        return $material_credit;
    }

}
