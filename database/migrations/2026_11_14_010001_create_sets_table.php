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
        Schema::create('sets', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->string('series');
            $table->foreignId('series_id')->nullable()->constrained()->nullOnDelete();
            $table->integer('printed_total');
            $table->integer('total');
            $table->string('unlimited');
            $table->string('standard');
            $table->string('expanded');
            $table->string('ptcgo_code');
            $table->string('release_date');
            $table->string('json_updated_at');
            $table->string('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sets');
    }
};
