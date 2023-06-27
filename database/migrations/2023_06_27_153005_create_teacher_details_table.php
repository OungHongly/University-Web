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
        Schema::create('teacher_details', function (Blueprint $table) {
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('subject_id')->index('FK_teacher_details_subjects_subject_id');
            $table->unsignedInteger('group_id')->index('FK_teacher_details_groups_group_id');

            $table->primary(['teacher_id', 'subject_id', 'group_id']);
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
};
