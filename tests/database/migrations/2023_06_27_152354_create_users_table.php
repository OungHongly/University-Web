<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('username', 50);
            $table->string('password', 20);
            $table->string('gender', 5);
            $table->string('phoneNumber', 50);
            $table->string('email', 100);
            $table->unsignedInteger('role_id');
            $table->timestamp('createdAt')->useCurrent();
            $table->timestamp('updatedAt')->useCurrent();
            
            $table->foreign('role_id', 'FK_users_roles_role_id')->references('role_id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
