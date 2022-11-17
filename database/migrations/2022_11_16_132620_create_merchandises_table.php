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
        Schema::create('merchandises', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->comment('商品名');
            $table->string('request', 50)->comment('交換先');
            $table->string('body', 200);
            $table->boolean('sold')->default(false);
            $table->string('image_url1', 300)->nullable();
            $table->string('image_url2', 300)->nullable();
            $table->string('image_url3', 50)->nullable();
            $table->string('image_url4', 50)->nullable();
            $table->string('image_url5', 50)->nullable();
            $table->string('image_url6', 50)->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('title_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchandises');
    }
};
