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
        Schema::create('race_chars', function (Blueprint $table) {
            $table->id('race_chars_id');
            $table->enum('size', ['Tiny', 'Small', 'Medium or Small', 'Medium', 'Large', 'Huge', 'Gargantuan']);
            $table->integer('walk_speed');
            $table->integer('swim_speed')->nullable();
            $table->integer('fly_speed')->nullable();
            $table->json('race_traits')->nullable();
            $table->json('languages')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('race_chars');
    }
};
