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
        Schema::create('other_country_deposits', function (Blueprint $table) {
            $table->id();
            $table->date('datetime_other_country_deposit');
            $table->string('other_country_deposit_customer');
            $table->double('rmb_other_country_deposit',2);
            $table->double('usd_other_country_deposit',2);
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
        Schema::dropIfExists('other_country_deposits');
    }
};
