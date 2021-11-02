<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('passport')->unique();
            $table->string('teams_email')->unique()->nullable();
            $table->char('gender')->comment('هذا يحل محل القسم بنين وبنات');
            $table->string('password');
            $table->integer('grade_id');
            $table->string('city')->nullable();
            $table->integer('phone_number_1')->nullable();
            $table->integer('phone_number_2')->nullable();
            $table->text('platform_report')->nullable();
            $table->string('personal_email');
            $table->index(['passport', 'teams_email']);
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
        Schema::dropIfExists('students');
    }
}
