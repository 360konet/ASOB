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
        Schema::create('local', function (Blueprint $table) {
            $table->id();
            $table->string('service');
            $table->string('operation');
            $table->string('rank');
            $table->string('lname');
            $table->string('fname');
            $table->string('gender');
            $table->string('location');
            $table->string('departure_date');
            $table->string('arrival_date');
            $table->string('appointment');
            $table->string('remarks');
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
        Schema::dropIfExists('local');
    }
};
