<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('body');
            $table->integer('inquiryable_id');
            $table->string('inquiryable_type')->comment('course, grade, center');
            $table->integer('administrator_id')->nullable();
            $table->integer('doable_id')->nullable();
            $table->string('doable_type')->nullable()->comment('teacher, student');
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
        Schema::dropIfExists('inquiries');
    }
}
