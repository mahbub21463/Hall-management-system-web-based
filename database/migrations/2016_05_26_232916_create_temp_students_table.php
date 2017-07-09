<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_students', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('student_id')->unique();
            
            $table->string('name')->nullable();
            $table->string('dept')->nullable();
            $table->string('hall')->nullable();
            $table->string('resident_status')->nullable();

             $table->integer('level')->nullable();
            $table->integer('term')->nullable();
            $table->integer('room_no')->nullable();
            $table->primary('student_id');
            //$table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('temp_users');
    }
}
