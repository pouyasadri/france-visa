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
        Schema::create('properties',static function (Blueprint $table) {
            $table->id('id')->primary();

            // pricing, counts
            $table->decimal('price', 12); // EUR
            $table->unsignedSmallInteger('rooms')->default(0);
            $table->unsignedSmallInteger('garages')->default(0);

            // type & status — use ENUM or string + check
            $table->enum('type', ['apartment','property','villa','studio','land','commercial'])->index();
            $table->enum('status', ['available','reserved','sold','rented'])->default('available')->index();

            // address
            $table->string('address_line')->nullable();
            $table->string('postal_code', 12)->index();
            $table->string('city')->index();
            $table->string('region')->nullable()->index();
            $table->string('country', 2)->default('FR')->index();

            // media
            $table->string('main_image')->nullable();

            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
