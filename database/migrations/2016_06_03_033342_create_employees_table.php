<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('employee_id');
            
            $table->string('name')->nullable();
            //$table->string('dept')->nullable();
            $table->string('designation')->nullable();
            $table->string('hall')->nullable();
            //$table->string('resident_status')->nullable();
            // $table->integer('mess_card_no')->nullable();
            // $table->integer('level')->nullable();
            // $table->integer('term')->nullable();
            // $table->integer('room_no')->nullable();
            $table->string('phone_no')->nullable();
           // $table->integer('library_card_no')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('blood_group')->nullable();
            
            $table->timestamps();

            //$table->string('profile_pic')->nullable();

            $table->primary('employee_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
