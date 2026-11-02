<?php

namespace Database\Seeders;

use App\Models\SeoSetting;
use Illuminate\Database\Seeder;

class SeoSettingSeeder extends Seeder
{
    public function run(): void
    {
        SeoSetting::create([
            'meta_title' => 'CVHub Career - Bangun Karir Impianmu',
            'meta_description' => 'CVHub Career membantu Anda membuat CV ATS-Friendly profesional. Konsultasi gratis sekarang!',
            'meta_keywords' => 'CV, resume, karir, pekerjaan, CV profesional, ATS friendly, lamaran kerja',
        ]);
    }
}
