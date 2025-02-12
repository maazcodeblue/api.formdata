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
        Schema::create('my_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('indoorPlacement')->nullable();
            $table->string('outdoorPlacement')->nullable();
            $table->string('bladeMockup')->nullable();
            $table->string('frontMockup')->nullable();
            $table->string('3dMockup')->nullable();
            $table->string('2dMockup')->nullable();
            $table->string('lettersMockup')->nullable();
            $table->string('lightboxMockup')->nullable();
            $table->string('detail');
            $table->string('imageUrl')->nullable();
            $table->string('image')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_forms');
    }
};
