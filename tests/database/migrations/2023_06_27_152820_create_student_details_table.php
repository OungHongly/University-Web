<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDetailsTable extends Migration
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
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('group_id');
            $table->unsignedInteger('promotion');
            $table->unsignedInteger('year');
            $table->unsignedInteger('semester');
            $table->string('timing', 100);
            $table->string('status', 50);
            
            $table->foreign('course_id', 'FK_student_details_courses_course_id')->references('course_id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('group_id', 'FK_student_details_groups_group_id')->references('group_id')->on('groups')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('student_id', 'FK_student_details_users_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
}
