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
            $table->string('body', 200);
            $table->string('image_url1', 300)->nullable();
            $table->string('image_url2', 300)->nullable();
            $table->string('image_url3', 300)->nullable();
            $table->string('image_url4', 300)->nullable();
            $table->string('image_url5', 300)->nullable();
            $table->string('image_url6', 300)->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('merchandise_id')->constrained();
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
        Schema::dropIfExists('replies');
    }
};
