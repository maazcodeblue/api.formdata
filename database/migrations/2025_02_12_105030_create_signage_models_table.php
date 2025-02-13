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
        Schema::create('signage_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('detail');
            $table->string('indoorPlacement')->nullable();
            $table->string('outdoorPlacement')->nullable();
            $table->string('bladeMockup')->nullable();
            $table->string('frontMockup')->nullable();
            $table->string('threeMockup')->nullable();
            $table->string('twoMockup')->nullable();
            $table->string('lettersMockup')->nullable();
            $table->string('lightboxMockup')->nullable();
            $table->string('size')->nullable();
            $table->string('brandingSolution')->nullable();
            $table->string('installation')->nullable();
            $table->string('siteInspection')->nullable();
            $table->string('signPermits')->nullable();
            $table->string('waterProofing')->nullable();
            $table->string('ulCertification')->nullable();
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
        Schema::dropIfExists('signage_models');
    }
};
