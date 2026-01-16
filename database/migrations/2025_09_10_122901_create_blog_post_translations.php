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
        Schema::create('blog_post_translations',static function (Blueprint $table) {
            $table->id('id')->primary();
            $table->unsignedBigInteger('blog_post_id')->index();
            $table->string('locale', 5)->index();
            $table->string('title');
            $table->string('slug',500);          // localized slug for SEO
            $table->string('excerpt', 500)->nullable();
            $table->longText('body');

            $table->timestamps();

            $table->unique(['blog_post_id','locale']);
            $table->unique(['locale','slug']);

            $table->foreign('blog_post_id')->references('id')->on('blog_posts')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_post_translations');
    }
};
