<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_informations', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedBigInteger('no_telp');
            $table->char('indonesia_province_location');
            $table->char('indonesia_city_location');
            $table->string('gender');
            $table->string('avatar');
            $table->text('address');
            $table->string('user_id');
            $table->timestamps();
        });

        Schema::table('personal_informations', function (Blueprint $table) {
            $table->foreign('indonesia_province_location')->references('id')->on('indonesia_provinces');
            $table->foreign('indonesia_city_location')->references('id')->on('indonesia_cities');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_informations');
    }
}
