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
        Schema::table('assignments', function (Blueprint $table) {
            $table->foreign(['subject_id'], 'FK_assignments_subjects_subject_id')->references(['subject_id'])->on('subjects')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['teacher_id'], 'FK_assignments_users_user_id')->references(['user_id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assignments', function (Blueprint $table) {
            $table->dropForeign('FK_assignments_subjects_subject_id');
            $table->dropForeign('FK_assignments_users_user_id');
        });
    }
};
