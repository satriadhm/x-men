<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KlasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $klaster = [
            'Asuransi dan Dana Pensiun',
            'Industri Energi Migas',
            'Industri Farmasi',
            'Industri Mineral dan Batubara',
            'Jasa Keuangan dan Bank',
            'Jasa Telekomunikasi dan Media',
            'Pariwisata, Logistik, dan Lainnya',
            'Pembangunan Infrastruktur',
            'Perkebunan dan Kehutanan',
            'Pertahanan, Manufaktur, dan Industri Lainnya',
            'Pupuk dan Pangan',
            'Sarana dan Prasarana Perhubungan',
            'Telekomunikasi dan Media'
        ];

        foreach ($klaster as $item) {
            DB::table('klaster')->insert([
                'nama_klaster' => $item,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
