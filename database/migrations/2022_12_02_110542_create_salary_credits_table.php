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
        Schema::create('salary_credits', function (Blueprint $table) {
            $table->id();
            $table->date('datetime_salary_credit');
            $table->string('salary_creditor');
            $table->double('rmb_salary_credit',2);
            $table->double('usd_salary_credit',2);
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
        Schema::dropIfExists('salary_credits');
    }
};
