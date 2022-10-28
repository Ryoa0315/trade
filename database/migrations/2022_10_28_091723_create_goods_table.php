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
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 50)->comment('商品名');
            $table->string('Request', 50)->comment('交換先');
            $table->string('Body', 200);
            $table->string('status', 50);
            $table->string('Image_url1', 50)->nullable();
            $table->string('Image_url2', 50)->nullable();
            $table->string('Image_url3', 50)->nullable();
            $table->string('Image_url4', 50)->nullable();
            $table->string('Image_url5', 50)->nullable();
            $table->string('Image_url6', 50)->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('title_id')->constrained();
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
        Schema::dropIfExists('goods');
    }
};
