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
        Schema::create('chatrooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user1')->comment("送信先user_id");
            $table->unsignedBigInteger('user2')->comment("送信元user_id");
            $table->foreign('user1')->references('id')->on('users');
            $table->foreign('user2')->references('id')->on('users');
            $table->foreignId('merchandise_id');
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
        Schema::dropIfExists('chatrooms');
    }
};
