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
        Schema::create('courselocal', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('service');
            $table->string('rank');
            $table->string('lname');
            $table->string('fname');
            $table->string('gender');
            $table->string('from');
            $table->string('to');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('course');
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
        Schema::dropIfExists('courselocal');
    }
};
