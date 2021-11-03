<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_informations', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedInteger('npm');
            $table->string('class');
            $table->string('major');
            $table->char('province_location');
            $table->char('city_location');
            $table->string('campus');
            $table->string('reason');
            $table->string('user_id');
            $table->timestamps();
        });

        Schema::table('class_informations', function ($table) {
            $table->foreign('province_location')->references('id')->on('indonesia_provinces')->onDelete('cascade');
            $table->foreign('city_location')->references('id')->on('indonesia_cities')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_informations');
    }
}
