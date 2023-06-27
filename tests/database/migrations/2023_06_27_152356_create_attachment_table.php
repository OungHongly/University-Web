<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachment', function (Blueprint $table) {
            $table->unsignedInteger('assignment_id');
            $table->unsignedInteger('student_id');
            $table->string('upload_file');
            
            $table->primary(['assignment_id', 'student_id']);
            $table->foreign('assignment_id', 'FK_attachment_assignments_assignment_id')->references('assignment_id')->on('assignments')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('student_id', 'FK_attachment_users_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachment');
    }
}
