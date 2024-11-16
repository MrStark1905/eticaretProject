<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string("image")->nullable();
            $table->string("name")->nullable();
            $table->text("content")->nullable();

            $table->text("text1_icon")->nullable();
            $table->string("text1")->nullable();
            $table->text("text1_content")->nullable();

            $table->text("text2_icon")->nullable();
            $table->string("text2")->nullable();
            $table->text("text2_content")->nullable();

            $table->text("text3_icon")->nullable();
            $table->string("text3")->nullable();
            $table->text("text3_content")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
