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
        Schema::create('professions', function (Blueprint $table) {
            $table->id('profession_id');
            $table->tinyText('profession_name');
            $table->tinyText('profession_description')->nullable();
            $table->json('hit_points');
            $table->json('class_proficiencies');
            $table->json('saving_throws');
            $table->json('skill_proficiencies');
            $table->json('initial_equipment')->nullable();
            $table->json('class_traits')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professions');
    }
};
