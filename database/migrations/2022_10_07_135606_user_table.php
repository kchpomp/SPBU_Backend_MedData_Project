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
        Schema::create('users', function(Blueprint $table){
            $table->string('PatientID');
            $table->string('PatientName');
            $table->string('PatientSurname');
            $table->string('PatientPatronymic');
            $table->string('BirthDate');
            $table->string('Sex');
            $table->string('ResidenseRegion');
            $table->string('ExaminationPlace');
            $table->string('ExaminationDate');
            $table->string('email', 255)->nullable(false)->unique('email');
            $table->string('password', 255)->nullable(false);
            $table->string('remember_token',100)->nullable(true);
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
