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
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->string('sujet');
            $table->string('description');
            $table->date('date');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->unsignedBigInteger('status')->default(0);
            $table->foreignId('projet_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tache_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timesheets');
    }
};
