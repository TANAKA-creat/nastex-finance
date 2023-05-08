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
        Schema::create('logistics_costs', function (Blueprint $table) {
            $table->id();
            $table->date('datetime_logistics_cost');
            $table->string('logistics_cost_creditor');
            $table->double('rmb_logistics_cost',2);
            $table->double('usd_logistics_cost',2);
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
        Schema::dropIfExists('logistics_costs');
    }
};
