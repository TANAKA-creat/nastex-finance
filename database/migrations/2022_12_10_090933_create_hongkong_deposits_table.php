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
        Schema::create('hongkong_deposits', function (Blueprint $table) {
            $table->id();
            $table->date('datetime_hongkong_deposit');
            $table->string('hongkong_deposit_customer');
            $table->double('rmb_hongkong_deposit',2);
            $table->double('usd_hongkong_deposit',2);
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
        Schema::dropIfExists('hongkong_deposits');
    }
};
