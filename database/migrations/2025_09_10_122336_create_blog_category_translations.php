<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_category_translations', static function (Blueprint $table) {
            $table->id('id')->primary();
            $table->unsignedBigInteger('blog_category_id');
            $table->string('locale', 5)->index();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();

            $table->unique(['blog_category_id', 'locale']);
            $table->unique(['locale', 'slug']);

            $table->foreign('blog_category_id')->references('id')->on('blog_categories')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_category_translations');
    }
};
