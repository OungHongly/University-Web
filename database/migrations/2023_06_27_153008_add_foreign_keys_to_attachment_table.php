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
        Schema::table('attachment', function (Blueprint $table) {
            $table->foreign(['assignment_id'], 'FK_attachment_assignments_assignment_id')->references(['assignment_id'])->on('assignments')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['student_id'], 'FK_attachment_users_user_id')->references(['user_id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attachment', function (Blueprint $table) {
            $table->dropForeign('FK_attachment_assignments_assignment_id');
            $table->dropForeign('FK_attachment_users_user_id');
        });
    }
};
