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
        Schema::create('weapons', function (Blueprint $table) {
            $table->id('weapon_id');
            $table->tinyText('weapon_name');
            $table->tinyText('weapon_type');
            $table->boolean('ammo')->default(0);
            $table->boolean('finesse')->default(0);
            $table->boolean('heavy')->default(0);
            $table->boolean('light')->default(0);
            $table->boolean('loading_time')->default(0);
            $table->tinyText('range')->nullable();
            $table->boolean('reach')->default(0);
            $table->boolean('thrown')->default(0);
            $table->boolean('two_handed')->default(0);
            $table->boolean('versatile')->default(0);
            $table->tinyText('damage_dice');
            $table->tinyText('versatile_damage')->nullable();
            $table->tinyText('damage_type');
            $table->tinyText('secondary_damage_type')->nullable();
            $table->tinyText('tertiary_damage_type')->nullable();
            $table->integer('additional_damage')->nullable();
            $table->json('additional_buffs')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapons');
    }
};
