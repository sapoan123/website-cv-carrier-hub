<?php

namespace Database\Seeders;

use App\Models\AboutSection;
use Illuminate\Database\Seeder;

class AboutSectionSeeder extends Seeder
{
    public function run(): void
    {
        AboutSection::create([
            'title' => 'Koleksi Template CV',
            'description' => 'CVHub Career menyediakan berbagai pilihan template CV profesional yang siap pakai — gratis. Dari desain klasik hingga modern, semua template dirancang untuk membantu Anda tampil beda di mata recruiter. Setiap template kami buat dengan memperhatikan standar ATS dan tren desain terkini. Tinggal pilih, edit, dan download — gratis, tanpa perlu keahlian desain.',
            'vision' => 'Menjadi platform template CV terpercaya yang membantu setiap individu tampil percaya diri dalam melamar kerja.',
            'mission' => 'Menyediakan koleksi template CV berkualitas tinggi yang mudah diakses dan digunakan oleh semua kalangan.',
            'is_active' => true,
        ]);
    }
}
