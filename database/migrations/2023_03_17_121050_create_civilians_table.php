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
        Schema::create('civilians', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('service');
            $table->string('rank');
            $table->string('lname');
            $table->string('fname');
            $table->string('nationality');
            $table->string('dob');
            $table->string('blood');
            $table->string('hometown');
            $table->string('region');
            $table->string('marital');
            $table->string('spouse')->nullable();
            $table->string('sphone')->nullable();
            $table->string('kin');
            $table->string('relation');
            $table->string('un');
            $table->string('kphone');
            $table->string('employment');
            $table->string('promotion');
            $table->string('phone');
            $table->string('remarks');
            $table->string('Gender');
            $table->string('course');
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
        Schema::dropIfExists('civilians');
    }
};
