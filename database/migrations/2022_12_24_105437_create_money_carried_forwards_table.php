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
        Schema::create('money_carried_forwards', function (Blueprint $table) {
            $table->id();
            $table->date('datetime_money_carried_forward');
            $table->string('money_carried_forward_customer');
            $table->double('rmb_money_carried_forward',2);
            $table->double('usd_money_carried_forward',2);
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
        Schema::dropIfExists('money_carried_forwards');
    }
};
