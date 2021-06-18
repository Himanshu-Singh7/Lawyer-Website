<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterLawerTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_lawer_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gender');
            $table->string('law_type')->nullable();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('father_n');
            $table->string('mother_n');
            $table->string('contact');
            $table->string('alt_contact');
            $table->string('dob');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('postal_code');
            $table->string('image');
            $table->string('type')->default('admin')->nullable();
            $table->boolean('verified')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_lawer_tables');
    }
}
