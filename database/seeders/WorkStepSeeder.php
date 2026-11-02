<?php

namespace Database\Seeders;

use App\Models\WorkStep;
use Illuminate\Database\Seeder;

class WorkStepSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [1, 'Hubungi Tim', 'Hubungi kami melalui WhatsApp atau form kontak.'],
            [2, 'Konsultasi', 'Konsultasikan kebutuhan CV Anda dengan tim ahli.'],
            [3, 'Pengerjaan', 'Tim kami akan mengerjakan CV profesional Anda.'],
            [4, 'Revisi', 'Lakukan revisi hingga Anda benar-benar puas.'],
            [5, 'Selesai', 'CV siap digunakan untuk melamar pekerjaan impian!'],
        ];

        foreach ($items as $item) {
            WorkStep::create([
                'step_number' => $item[0],
                'title' => $item[1],
                'description' => $item[2],
                'is_active' => true,
            ]);
        }
    }
}
