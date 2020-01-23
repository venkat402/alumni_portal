<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('First_Name');
            $table->string('Middle_Name');
            $table->string('Surname');
            $table->string('Phone_Number');
            $table->string('Work_station');
            $table->string('Course');
            $table->string('Profession');
            $table->string('Location');
            $table->string('Year_joined')->nullable();
            $table->string('Year_graduated');
            $table->string('email');
            $table->string('gender');
            $table->string('Avatar');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('alumnis');
    }
}
