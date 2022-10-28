<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->id();
            $table->string('User_id', 50);
            $table->string('Good_id', 50);
            $table->timestamps();
            $table->string('Body', 200);
            $table->string('Image_url1', 50)->nullable();
            $table->string('Image_url2', 50)->nullable();
            $table->string('Image_url3', 50)->nullable();
            $table->string('Image_url4', 50)->nullable();
            $table->string('Image_url5', 50)->nullable();
            $table->string('Image_url6', 50)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('replies');
    }
};
