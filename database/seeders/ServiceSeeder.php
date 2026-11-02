<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['Pembuatan CV Profesional', 'CV dirancang khusus oleh ahli untuk memaksimalkan peluang Anda.', 1],
            ['Review CV', 'Dapatkan masukan profesional untuk CV Anda yang sudah ada.', 2],
            ['Career Consultation', 'Konsultasi karir satu-satu dengan mentor berpengalaman.', 3],
            ['Interview Preparation', 'Persiapan wawancara kerja dengan simulasi dan tips.', 4],
            ['LinkedIn Optimization', 'Optimalkan profil LinkedIn Anda untuk menarik recruiter.', 5],
            ['ATS Optimization', 'Pastikan CV Anda lolos seleksi ATS dengan optimasi khusus.', 6],
        ];

        foreach ($items as $item) {
            Service::create([
                'title' => $item[0],
                'description' => $item[1],
                'sort_order' => $item[2],
                'is_published' => true,
            ]);
        }
    }
}
