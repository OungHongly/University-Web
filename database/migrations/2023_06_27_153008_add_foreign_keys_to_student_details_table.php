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
        Schema::table('student_details', function (Blueprint $table) {
            $table->foreign(['course_id'], 'FK_student_details_courses_course_id')->references(['course_id'])->on('courses')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['group_id'], 'FK_student_details_groups_group_id')->references(['group_id'])->on('groups')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['student_id'], 'FK_student_details_users_user_id')->references(['user_id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_details', function (Blueprint $table) {
            $table->dropForeign('FK_student_details_courses_course_id');
            $table->dropForeign('FK_student_details_groups_group_id');
            $table->dropForeign('FK_student_details_users_user_id');
        });
    }
};
