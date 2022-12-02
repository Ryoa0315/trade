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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('to')->comment("送信先user_id");
            $table->unsignedBigInteger('from')->comment("送信元user_id");
            $table->string('body', 200);
            $table->string('image_url1', 300)->nullable();
            $table->string('image_url2', 300)->nullable();
            $table->string('image_url3', 300)->nullable();
            $table->string('image_url4', 300)->nullable();
            $table->string('image_url5', 300)->nullable();
            $table->string('image_url6', 300)->nullable();
            $table->foreign('to')->references('id')->on('users');
            $table->foreign('from')->references('id')->on('users');
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
        Schema::dropIfExists('messages');
    }
};
