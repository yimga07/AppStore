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
        Schema::create('operates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->constrained()->cascadeonUpdate()->cascadeOnDelete();
            $table->foreignId('version_id')->constrained()->cascadeonUpdate()->cascadeOnDelete() ;
            $table->foreignId('entity_id')->constrained()->cascadeonUpdate()->cascadeOnDelete();
            $table->foreignId('feature_id')->constrained()->cascadeonUpdate()->cascadeOnDelete();
            $table->foreignId('editor_id')->constrained() ->cascadeonUpdate() ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operates');
    }
};
