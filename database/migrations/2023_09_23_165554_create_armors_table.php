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
        Schema::create('armors', function (Blueprint $table) {
            $table->id('armor_id');
            $table->tinyText('armor_name');
            $table->tinyText('armor_class');
            $table->enum('armor_type', ['Light', 'Medium', 'Heavy']);
            $table->boolean('stealth_disadvantage')->default(0);
            $table->json('additional_buffs')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armors');
    }
};
