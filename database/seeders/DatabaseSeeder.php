<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            HeroSectionSeeder::class,
            AboutSectionSeeder::class,
            AdvantageSeeder::class,
            ServiceSeeder::class,
            WorkStepSeeder::class,
            WhyChooseUsSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            ContactSeeder::class,
            FooterSeeder::class,
            SeoSettingSeeder::class,
        ]);
    }
}
