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
        Schema::create('no_receipt_credits', function (Blueprint $table) {
            $table->id();
            $table->date('datetime_no_receipt_credit');
            $table->string('no_receipt_credit_creditor');
            $table->double('rmb_no_receipt_credit',2);
            $table->double('usd_no_receipt_credit',2);
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
        Schema::dropIfExists('no_receipt_credits');
    }
};
