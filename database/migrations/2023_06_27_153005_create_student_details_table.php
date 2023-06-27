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
        Schema::create('student_details', function (Blueprint $table) {
            $table->unsignedInteger('student_id')->primary();
            $table->unsignedInteger('course_id')->index('FK_student_details_courses_course_id');
            $table->unsignedInteger('group_id')->index('FK_student_details_groups_group_id');
            $table->unsignedInteger('promotion');
            $table->unsignedInteger('year');
            $table->unsignedInteger('semester');
            $table->string('timing', 100);
            $table->string('status', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_details');
    }
};
