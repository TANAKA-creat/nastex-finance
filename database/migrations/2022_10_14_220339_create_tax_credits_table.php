<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_credits', function (Blueprint $table) {
            $table->id();
            $table->date('datetime_tax_credit');
            $table->string('tax_creditor');
            $table->double('rmb_tax_credit',2);
            $table->double('usd_tax_credit',2);
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
        Schema::dropIfExists('tax_credits');
    }
}
