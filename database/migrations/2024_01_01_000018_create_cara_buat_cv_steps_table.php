<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cara_buat_cv_steps', function (Blueprint $table) {
            $table->id();
            $table->string('num');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('icon')->nullable();
            $table->text('title_icon')->nullable();
            $table->string('img')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cara_buat_cv_steps');
    }
};
