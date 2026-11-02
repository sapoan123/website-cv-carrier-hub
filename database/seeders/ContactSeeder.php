<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::create([
            'address' => 'Jl. Contoh No. 123, Jakarta Pusat, Indonesia',
            'email' => 'hello@cvhubcareer.com',
            'phone' => '+62 812-3456-7890',
            'whatsapp' => '+62 812-3456-7890',
            'operational_hours' => 'Senin - Jumat: 09:00 - 18:00',
            'is_active' => true,
        ]);
    }
}
