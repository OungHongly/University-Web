<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_details', function (Blueprint $table) {
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('group_id');
            
            $table->primary(['teacher_id', 'subject_id', 'group_id']);
            $table->foreign('group_id', 'FK_teacher_details_groups_group_id')->references('group_id')->on('groups')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('subject_id', 'FK_teacher_details_subjects_subject_id')->references('subject_id')->on('subjects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('teacher_id', 'FK_teacher_details_users_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_details');
    }
}
