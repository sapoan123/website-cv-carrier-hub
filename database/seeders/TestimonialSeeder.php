<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['Sarah Wijaya', 'Marketing Manager', 5, 'CV saya benar-benar berbeda setelah menggunakan jasa CVHub Career. Dalam 2 minggu, saya mendapat 3 panggilan interview! Terima kasih CVHub!'],
            ['Ahmad Rizki', 'Software Engineer', 5, 'Pelayanan sangat profesional dan cepat. Hasil CV melebihi ekspektasi saya. Sangat recommended!'],
            ['Diana Putri', 'Fresh Graduate', 5, 'Awalnya ragu, tapi setelah konsultasi gratis, saya yakin memilih CVHub. Hasilnya memuaskan dan ATS friendly!'],
        ];

        foreach ($items as $item) {
            Testimonial::create([
                'name' => $item[0],
                'position' => $item[1],
                'rating' => $item[2],
                'content' => $item[3],
                'is_active' => true,
            ]);
        }
    }
}
