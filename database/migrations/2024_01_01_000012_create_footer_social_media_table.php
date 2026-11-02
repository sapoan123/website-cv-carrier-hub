<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('footer_social_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('footer_id')->constrained()->cascadeOnDelete();
            $table->string('platform');
            $table->string('url');
            $table->string('icon')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('footer_social_media');
    }
};
