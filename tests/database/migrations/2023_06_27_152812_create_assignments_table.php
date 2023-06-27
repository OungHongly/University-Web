<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
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
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('teacher_id');
            $table->timestamp('assignment_date')->nullable()->useCurrent();
            $table->dateTime('assignment_deadline')->useCurrent();
            
            $table->foreign('subject_id', 'FK_assignments_subjects_subject_id')->references('subject_id')->on('subjects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('teacher_id', 'FK_assignments_users_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
}
