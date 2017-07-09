<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
             $table->string('payment_id');
           
            $table->integer('student_id');
            $table->string('fee_type');
            $table->double('amount');
            $table->date('payment_date');
            $table->integer('bank_scroll');
            $table->timestamps();
             $table->primary('payment_id');
            $table->foreign('student_id')->references('student_id')->on('students');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payments');
    }
}
