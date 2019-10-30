<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->text('address');
            $table->string('contact_person');
            $table->string('alt_contact_person')->nullable();
            $table->string('contact_phone');
            $table->string('alt_contact_phone')->nullable();
            $table->string('contact_email');
            $table->string('alt_contact_email')->nullable();
            $table->string('longitude');
            $table->string('latitude');
            $table->boolean('is_active');
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
        Schema::dropIfExists('courts');
    }
}
