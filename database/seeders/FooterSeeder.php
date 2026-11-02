<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    public function run(): void
    {
        $footer = Footer::create([
            'description' => 'Platform pengembangan karir profesional. Kami membantu Anda membuat CV ATS-Friendly yang menonjol di mata recruiter.',
            'copyright' => '© ' . date('Y') . ' CVHub Career. All rights reserved.',
            'is_active' => true,
        ]);

        $footer->socialMedia()->createMany([
            ['platform' => 'Instagram', 'url' => '#'],
            ['platform' => 'LinkedIn', 'url' => '#'],
            ['platform' => 'YouTube', 'url' => '#'],
            ['platform' => 'Facebook', 'url' => '#'],
        ]);

        $footer->quickLinks()->createMany([
            ['title' => 'Home', 'url' => '#home'],
            ['title' => 'Tentang', 'url' => '#tentang'],
            ['title' => 'Layanan', 'url' => '#layanan'],
            ['title' => 'Testimoni', 'url' => '#testimoni'],
            ['title' => 'Kontak', 'url' => '#contact'],
        ]);
    }
}
