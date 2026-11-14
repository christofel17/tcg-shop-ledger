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
        Schema::create('card_definitions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('set_id');
            $table->foreign('set_id')->references('id')->on('sets')->constrained();
            $table->string('set_number');
            $table->string('slug');
            $table->string('name');
            $table->string('supertype');
            $table->json('subtypes');
            $table->integer('hp')->nullable();
            $table->string('type')->nullable();
            $table->string('rarity');
            $table->string('pokedex_number')->nullable();
            $table->string('unlimited');
            $table->string('standard');
            $table->string('expanded');
            $table->string('regulation_mark')->nullable();
            $table->string('image_small')->nullable();
            $table->string('image_large')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_definitions');
    }
};
