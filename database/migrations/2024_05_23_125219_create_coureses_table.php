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
        Schema::create('coureses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->text('course');
            $table->string('course_duration');
            $table->string('course_type');
            $table->year('year_of_completion');
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
        Schema::dropIfExists('coureses');
    }
};
