<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    public function run(): void
    {
        $hero = HeroSection::create([
            'headline' => 'Bangun Karir Impianmu',
            'subheadline' => 'CV Profesional, Peluang Lebih Besar',
            'description' => 'Kami membantu Anda membuat CV ATS-Friendly yang menonjol di mata recruiter. Dapatkan pekerjaan impian Anda dengan CV yang tepat.',
            'cta_text' => 'Konsultasi Sekarang',
            'cta_url' => '#contact',
            'is_active' => true,
        ]);

        HeroSlide::create([
            'hero_section_id' => $hero->id,
            'image_path' => 'hero/bg-1.jpg',
            'alt_text' => 'CV Professional',
            'sort_order' => 0,
            'is_active' => true,
        ]);

        HeroSlide::create([
            'hero_section_id' => $hero->id,
            'image_path' => 'hero/bg-2.jpg',
            'alt_text' => 'Career Development',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        HeroSlide::create([
            'hero_section_id' => $hero->id,
            'image_path' => 'hero/bg-3.jpg',
            'alt_text' => 'Job Search',
            'sort_order' => 2,
            'is_active' => true,
        ]);
    }
}
