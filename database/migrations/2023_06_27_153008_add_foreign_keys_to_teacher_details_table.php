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
        Schema::table('teacher_details', function (Blueprint $table) {
            $table->foreign(['group_id'], 'FK_teacher_details_groups_group_id')->references(['group_id'])->on('groups')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['subject_id'], 'FK_teacher_details_subjects_subject_id')->references(['subject_id'])->on('subjects')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['teacher_id'], 'FK_teacher_details_users_user_id')->references(['user_id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teacher_details', function (Blueprint $table) {
            $table->dropForeign('FK_teacher_details_groups_group_id');
            $table->dropForeign('FK_teacher_details_subjects_subject_id');
            $table->dropForeign('FK_teacher_details_users_user_id');
        });
    }
};
