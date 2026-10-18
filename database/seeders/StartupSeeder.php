<?php

namespace Database\Seeders;

use App\Models\Startup;
use Illuminate\Database\Seeder;

class StartupSeeder extends Seeder
{
    public function run(): void
    {
        $startups = [
            [
                'name' => 'Tekno Nusantara',
                'industry' => 'Technology',
                'founder' => 'Andi Pratama',
                'logo' => 'startup-1.svg',
                'website' => 'https://example.com',
                'description' => 'Startup teknologi yang berfokus pada pengembangan solusi digital untuk bisnis lokal.',
            ],
            [
                'name' => 'Hijau Digital',
                'industry' => 'Environment',
                'founder' => 'Siti Rahma',
                'logo' => 'startup-2.svg',
                'website' => 'https://example.com',
                'description' => 'Inisiatif digital untuk mendukung gaya hidup ramah lingkungan dan berkelanjutan.',
            ],
            [
                'name' => 'Fintek Lokal',
                'industry' => 'Fintech',
                'founder' => 'Budi Santoso',
                'logo' => 'startup-3.svg',
                'website' => 'https://example.com',
                'description' => 'Platform simulasi layanan keuangan digital untuk kebutuhan masyarakat dan UMKM.',
            ],
            [
                'name' => 'EduKita',
                'industry' => 'Education',
                'founder' => 'Dina Permata',
                'logo' => 'startup-4.svg',
                'website' => 'https://example.com',
                'description' => 'Platform belajar digital yang membantu pelajar mengakses materi pembelajaran.',
            ],
            [
                'name' => 'Pangan Pintar',
                'industry' => 'Agritech',
                'founder' => 'Rizky Maulana',
                'logo' => 'startup-5.svg',
                'website' => 'https://example.com',
                'description' => 'Solusi teknologi untuk membantu pengelolaan dan distribusi hasil pertanian.',
            ],
            [
                'name' => 'Kreasi Kode',
                'industry' => 'Software',
                'founder' => 'Fajar Ramadhan',
                'logo' => 'startup-6.svg',
                'website' => 'https://example.com',
                'description' => 'Studio pengembangan perangkat lunak untuk kebutuhan bisnis dan komunitas.',
            ],
            [
                'name' => 'Medika Digital',
                'industry' => 'Healthtech',
                'founder' => 'Nadia Putri',
                'logo' => 'startup-7.svg',
                'website' => 'https://example.com',
                'description' => 'Konsep layanan digital yang membantu pengguna menemukan informasi kesehatan.',
            ],
            [
                'name' => 'KaryaHub',
                'industry' => 'Creative',
                'founder' => 'Dimas Saputra',
                'logo' => 'startup-8.svg',
                'website' => 'https://example.com',
                'description' => 'Ruang kolaborasi digital untuk kreator, desainer, dan pelaku industri kreatif.',
            ],
        ];

        foreach ($startups as $startup) {
            Startup::create($startup);
        }
    }
}