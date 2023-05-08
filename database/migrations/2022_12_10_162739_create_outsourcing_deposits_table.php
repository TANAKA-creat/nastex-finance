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
        Schema::create('outsourcing_deposits', function (Blueprint $table) {
                $table->id();
                $table->date('datetime_outsourcing_deposit');
                $table->string('outsourcing_deposit_customer');
                $table->double('rmb_outsourcing_deposit',2);
                $table->double('usd_outsourcing_deposit',2);
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
        Schema::dropIfExists('outsourcing_deposits');
    }
};
