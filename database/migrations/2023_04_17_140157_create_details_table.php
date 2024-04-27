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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->text('adresse')->nullable();
            $table->string('img1')->nullable();
            $table->string('title1')->nullable();
            $table->text('title12')->nullable();
            $table->string('img2')->nullable();
            $table->string('title2')->nullable();
            $table->text('title22')->nullable();
            $table->string('img3')->nullable();
            $table->string('title3')->nullable();
            $table->text('title32')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
