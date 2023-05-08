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
        Schema::create('within_china_deposits', function (Blueprint $table) {
            $table->id();
            $table->date('datetime_within_china_deposit');
            $table->string('within_china_deposit_customer');
            $table->double('rmb_within_china_deposit',2);
            $table->double('usd_within_china_deposit',2);
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
        Schema::dropIfExists('within_china_deposits');
    }
};
