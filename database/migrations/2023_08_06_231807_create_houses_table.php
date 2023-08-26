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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string("house_name");
            $table->integer("house_price");
            $table->text("house_description");
            $table->integer("house_room_count");
            $table->integer("house_garage_count");
            $table->string("house_region");
            $table->string("house_postal_code");
            $table->string("house_exact_location");
            $table->string("house_main_image");
            $table->string("house_images");
            $table->string("house_id");
            $table->string("house_type");
            $table->string("house_status")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
