<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->morphs('payment');
            $table->unsignedInteger('student_id');
            $table->timestamp('payment_date')->nullable()->useCurrent();
            $table->double('amount')->unsigned();
            
            $table->primary(['payment_id', 'student_id']);
            $table->foreign('student_id', 'FK_payments_users_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
