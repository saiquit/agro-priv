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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique(); // Unique identifier for the page
            $table->string('slug')->unique()->nullable(); // SEO-friendly URL slug
            $table->json('seo_meta')->nullable();
            $table->json('settings')->nullable(); // JSON for modular settings (e.g., widgets)
            $table->string('cover_image')->nullable();
            $table->boolean('is_active')->default(true); // Activation status for the page
            $table->softDeletes(); // Allow soft deletes for recovery
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
