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
        Schema::create('races', function (Blueprint $table) {
            $table->id('race_id');
            $table->mediumText('race_name');
            $table->json('race_description')->nullable();
            $table->foreignId('score_increase_fk')->constrained(
                table: 'score_increases', 
                column: 'score_id',
                indexName: 'fk_race_score_increase' 
            );
            $table->foreignId('race_chars_fk')->constrained(
                table: 'race_chars',
                column: 'race_chars_id',
                indexName: 'fk_race_chars'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
