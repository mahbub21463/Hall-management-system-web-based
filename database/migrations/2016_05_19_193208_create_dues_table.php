<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dues', function (Blueprint $table) {
            $table->increments('due_id');
            $table->integer('student_id');
            $table->string('fee_type');
            $table->double('amount');
            $table->date('last_payment_date');
            $table->integer('fine_per_day');
            
            //$table->primary('due_id');
            $table->foreign('student_id')->references('student_id')->on('students');
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
        Schema::drop('dues');
    }
}
