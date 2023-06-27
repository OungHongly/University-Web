<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->unsignedInteger('result_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('subject_id');
            $table->double('score')->unsigned();
            
            $table->primary(['result_id', 'student_id']);
            $table->foreign('subject_id', 'FK_results_subjects_subject_id')->references('subject_id')->on('subjects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('student_id', 'FK_results_users_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
