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
            $table->unsignedBigInteger('npm');
            $table->string('class');
            $table->string('major');
            $table->string('campus')->nullable();
            $table->string('reason');
            $table->string('user_id');
            $table->timestamps();
        });

        Schema::table('class_informations', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('campus')->references('id')->on('campuses')->onDelete('cascade');
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
