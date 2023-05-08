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
        Schema::create('entertainment_expenses', function (Blueprint $table) {
            $table->id();
            $table->date('datetime_entertainment_expense');
            $table->string('entertainment_expense_creditor');
            $table->double('rmb_entertainment_expense',2);
            $table->double('usd_entertainment_expense',2);
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
        Schema::dropIfExists('entertainment_expenses');
    }
};
