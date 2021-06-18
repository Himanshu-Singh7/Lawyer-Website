<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerDetailTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_detail_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('uid');
            $table->string('lawer_type');
            $table->string('case_name');
            $table->string('court_name');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('case_statuss');
            $table->text('case_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_detail_tables');
    }
}
