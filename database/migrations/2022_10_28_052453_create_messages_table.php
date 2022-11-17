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
            $table->string('to', 50)->comment('user_id');
            $table->string('from', 50)->comment('user_id');
            $table->string('merchandises_id', 50);
            $table->timestamps();
            $table->string('body', 200);
            $table->string('image_url1', 50)->nullable();
            $table->string('image_url2', 50)->nullable();
            $table->string('image_url3', 50)->nullable();
            $table->string('image_url4', 50)->nullable();
            $table->string('image_url5', 50)->nullable();
            $table->string('image_url6', 50)->nullable();
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
