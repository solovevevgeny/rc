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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('train_id')->constrained('trains')->cascadeOnDelete()->default(0);
            // $table->foreignId('event_id')->constrained('events')->cascadeOnDelete()->default(0);
            // TODO: FIX default 

            $table->unsignedBigInteger('train_id')->nullable()->default(NULL);
            $table->unsignedBigInteger('event_id')->nullable()->default(NULL);

            $table->text('description');
            $table->dateTime('datetime');
            $table->boolean('is_commented')->nullable()->default(false);
            $table->boolean('is_public')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
