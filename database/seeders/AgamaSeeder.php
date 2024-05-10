<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agamas = [
            'Agama',
            'Katolik',
            'Islam',
            'Kristen Protestan',
            'Hindu',
            'Budha',
            'Kong Hu Cu',
            'Kepercayaan'
        ];

        foreach ($agamas as $agama) {
            DB::table('agama')->insert([
                'agama' => $agama,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
