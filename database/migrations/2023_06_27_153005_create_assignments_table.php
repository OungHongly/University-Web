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
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('assignment_id');
            $table->unsignedInteger('subject_id')->index('FK_assignments_subjects_subject_id');
            $table->unsignedInteger('teacher_id')->index('FK_assignments_users_user_id');
            $table->timestamp('assignment_date')->nullable()->useCurrent();
            $table->dateTime('assignment_deadline')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignments');
    }
};
