<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('auxiliary_material_credits', function (Blueprint $table) {
        $table->id();
        $table->date('datetime_auxiliary_material_credit');
        $table->string('auxiliary_material_credit_creditor');
        $table->double('rmb_auxiliary_material_credit',2);
        $table->double('usd_auxiliary_material_credit',2);
        $table->integer('category_id')->unsigned()->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auxiliary_material_credits');
    }
};