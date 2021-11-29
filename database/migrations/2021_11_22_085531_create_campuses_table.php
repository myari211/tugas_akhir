<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campuses', function (Blueprint $table) {
            $table->string('id');
            $table->string('name_university');
            $table->char('province_location');
            $table->char('city_location');
            $table->string('address');
            $table->unsignedBigInteger('phone')->nullable();
            $table->string('zip_code')->nullable();
            $table->timestamps();
        });

        Schema::table('campuses', function ($table) {
            $table->foreign('province_location')->references('id')->on('indonesia_provinces')->onDelete('cascade');
            $table->foreign('city_location')->references('id')->on('indonesia_cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campuses');
    }
}
