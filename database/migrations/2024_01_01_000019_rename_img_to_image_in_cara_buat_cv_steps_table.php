<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cara_buat_cv_steps', function (Blueprint $table) {
            $table->renameColumn('img', 'image');
        });
    }

    public function down(): void
    {
        Schema::table('cara_buat_cv_steps', function (Blueprint $table) {
            $table->renameColumn('image', 'img');
        });
    }
};
