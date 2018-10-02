<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarsBrandModelYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title",255);
            $table->text("short_text");
            $table->text("full_text");
            $table->string("status", 100)->default("visible");
            $table->unsignedInteger('model_id');
            $table->string('year',20);
            $table->unsignedInteger('photo_id')->nullable();

            $table->foreign('model_id')->references('id')->on('models');
            $table->foreign('photo_id')->references('id')->on('photos');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
