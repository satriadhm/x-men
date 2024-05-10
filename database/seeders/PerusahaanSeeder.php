<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perusahaan = [
            [
                'nama_perusahaan' => 'PT ASABRI (Persero)',
                'id_klaster' => 1, // Assuming Asuransi dan Dana Pensiun has ID 1
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Asuransi Jiwasraya (Persero)',
                'id_klaster' => 1, // Assuming Asuransi dan Dana Pensiun has ID 1
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Bahana Pembinaan Usaha Indonesia (Persero)',
                'id_klaster' => 1, // Assuming Asuransi dan Dana Pensiun has ID 1
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Kliring Berjangka Indonesia (Persero)',
                'id_klaster' => 1, // Assuming Asuransi dan Dana Pensiun has ID 1
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Reasuransi Indonesia Utama (Persero)',
                'id_klaster' => 1, // Assuming Asuransi dan Dana Pensiun has ID 1
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Taspen (Persero)',
                'id_klaster' => 1, // Assuming Asuransi dan Dana Pensiun has ID 1
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Energy Management Indonesia (Persero)',
                'id_klaster' => 2, // Assuming Industri Energi Migas has ID 2
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pertamina (Persero)',
                'id_klaster' => 2, // Assuming Industri Energi Migas has ID 2
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Perusahaan Listrik Negara (Persero)',
                'id_klaster' => 2, // Assuming Industri Energi Migas has ID 2
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($perusahaan as $data) {
            DB::table('perusahaan')->insert($data);
        }
    }
}
