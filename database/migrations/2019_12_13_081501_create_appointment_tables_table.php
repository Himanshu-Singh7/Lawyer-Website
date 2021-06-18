<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('uid');
            $table->string('name');
            $table->string('email');
            $table->string('law_type');
            $table->string('subject');
            $table->string('message');
            $table->string('appointment_date');
            $table->string('appointment_id');
            $table->string('lawer_assigned_name');
            $table->string('lawer_assigned_id');
            $table->string('status');
            $table->string('payment_amount');
            $table->string('payment_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_tables');
    }
}
