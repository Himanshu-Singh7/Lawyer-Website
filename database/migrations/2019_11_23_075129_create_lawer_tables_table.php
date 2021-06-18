<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawerTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawer_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('lawer_first_name');
            $table->string('lawer_last_name');
            $table->string('designation');
            $table->string('description');
            $table->string('charges');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lawer_tables');
    }
}
