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
        Schema::create('characters', function (Blueprint $table) {
            $table->id('character_id');
            $table->tinyText('character_name');
            $table->foreignId('character_race_fk')->constrained(
                table: 'races',
                column: 'race_id',
                indexName: 'fk_character_race'
            );
            $table->foreignId('character_profession_fk')->constrained(
                table: 'professions',
                column: 'profession_id',
                indexName: 'fk_character_profession'
            );
            $table->integer('str');
            $table->integer('dex');
            $table->integer('con');
            $table->integer('int');
            $table->integer('wis');
            $table->integer('cha');
            $table->integer('character_level');
            $table->integer('proficiency_bonus');
            $table->json('inventory')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
