<?php

namespace Database\Seeders;

use App\Models\CaraBuatCvStep;
use Illuminate\Database\Seeder;

class CaraBuatCvStepSeeder extends Seeder
{
    public function run(): void
    {
        $steps = [
            [
                'num' => '01',
                'title' => 'Pilih Template',
                'description' => 'Pilih template CV profesional sesuai kebutuhanmu.',
                'icon' => '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/></svg>',
                'title_icon' => '<svg class="w-4 h-4 text-spotify-green/40" fill="none" stroke="#1DB954" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/></svg>',
                'img' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=200&h=200&fit=crop&auto=format',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'num' => '02',
                'title' => 'Isi Data CV',
                'description' => 'Lengkapi data diri, pengalaman kerja, pendidikan, dan keahlian.',
                'icon' => '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/></svg>',
                'title_icon' => '<svg class="w-4 h-4 text-spotify-green/40" fill="none" stroke="#1DB954" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/></svg>',
                'img' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=200&h=200&fit=crop&auto=format',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'num' => '03',
                'title' => 'Preview CV',
                'description' => 'Lihat hasil CV secara langsung sebelum diunduh.',
                'icon' => '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>',
                'title_icon' => '<svg class="w-4 h-4 text-spotify-green/40" fill="none" stroke="#1DB954" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>',
                'img' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=200&h=200&fit=crop&auto=format',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'num' => '04',
                'title' => 'Download CV',
                'description' => 'Unduh CV dalam format PDF berkualitas tinggi.',
                'icon' => '<svg fill="none" viewBox="0 0 24 24"><path stroke="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>',
                'title_icon' => '<svg class="w-4 h-4 text-spotify-green/40" fill="none" stroke="#1DB954" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>',
                'img' => 'https://images.unsplash.com/photo-1606857521015-7f9fcf423740?w=200&h=200&fit=crop&auto=format',
                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($steps as $step) {
            CaraBuatCvStep::create($step);
        }
    }
}
