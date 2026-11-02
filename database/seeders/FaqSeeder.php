<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['Berapa lama proses pembuatan CV?', 'Proses pembuatan CV biasanya memakan waktu 2-3 hari kerja setelah data diri Anda lengkap.', 1],
            ['Apakah CV yang dibuat ATS Friendly?', 'Ya, semua CV yang kami buat sudah dioptimalkan untuk ATS (Applicant Tracking System) sehingga lolos seleksi awal perusahaan.', 2],
            ['Bolehkah saya melakukan revisi?', 'Tentu! Kami menyediakan revisi gratis tanpa batas hingga Anda benar-benar puas dengan hasilnya.', 3],
            ['Bagaimana cara memesan layanan?', 'Anda dapat menghubungi kami melalui form kontak di website atau langsung melalui WhatsApp untuk konsultasi gratis terlebih dahulu.', 4],
            ['Apakah ada jaminan kepuasan?', 'Kami memberikan jaminan kepuasan 100%. Jika Anda tidak puas dengan hasilnya, kami akan merevisi hingga Anda puas.', 5],
        ];

        foreach ($items as $item) {
            Faq::create([
                'question' => $item[0],
                'answer' => $item[1],
                'sort_order' => $item[2],
                'is_active' => true,
            ]);
        }
    }
}
