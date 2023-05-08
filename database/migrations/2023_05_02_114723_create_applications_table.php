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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->unique();
            $table->string('description',250);
            $table->string('type');
            $table->string('slug')->unique();
            $table->foreignId('editor_id')
            ->constrained()
            ->cascadeonUpdate()
            ->cascadeOnDelete();
            $table->foreignId('feature_id')
            ->constrained()
            ->cascadeonUpdate()
            ->cascadeOnDelete();
            $table->string('licence');
            $table->string('tag_activity');
            $table->string('URL');
            $table->boolean('state');
            $table->date('date_added')->nullable();
            $table->string('base de données');
            $table->string('personne en charge');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
