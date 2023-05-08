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
        Schema::create('ticket_fees', function (Blueprint $table) {
            $table->id();
            $table->date('datetime_ticket_fee');
            $table->string('ticket_fee_creditor');
            $table->double('rmb_ticket_fee',2);
            $table->double('usd_ticket_fee',2);
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
        Schema::dropIfExists('ticket_fees');
    }
};
