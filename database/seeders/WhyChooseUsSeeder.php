<?php

namespace Database\Seeders;

use App\Models\WhyChooseUs;
use Illuminate\Database\Seeder;

class WhyChooseUsSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['Tim Berpengalaman', 'Didukung oleh tim profesional yang berpengalaman di bidang HR dan rekrutmen.', 1],
            ['Pelayanan Cepat', 'Proses pengerjaan cepat tanpa mengorbankan kualitas.', 2],
            ['ATS Friendly', 'CV dioptimalkan untuk sistem ATS yang digunakan perusahaan.', 3],
            ['Harga Kompetitif', 'Harga terjangkau dengan kualitas terbaik.', 4],
            ['Kepuasan Pelanggan', 'Prioritas utama kami adalah kepuasan Anda.', 5],
            ['Konsultasi Gratis', 'Dapatkan konsultasi gratis sebelum memesan layanan.', 6],
        ];

        foreach ($items as $item) {
            WhyChooseUs::create([
                'title' => $item[0],
                'description' => $item[1],
                'sort_order' => $item[2],
                'is_active' => true,
            ]);
        }
    }
}
