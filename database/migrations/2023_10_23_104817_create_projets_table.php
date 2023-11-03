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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('nom_projet');
            $table->text('description');
            $table->string('manager')->nullable();
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('categories')->nullable();
            $table->string('documents')->nullable();
            $table->string('commentaires')->nullable();
            $table->unsignedBigInteger('status')->default(0);
            $table->string('collab_id')->nullable();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
