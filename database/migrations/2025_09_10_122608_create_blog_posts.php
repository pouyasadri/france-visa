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
        Schema::create('blog_posts', static function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->ulid('category_id')->nullable()->index();
            $table->string('main_image')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('blog_categories')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
