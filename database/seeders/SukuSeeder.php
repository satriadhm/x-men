<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sukus = [
            'Mandailing',
            'Aceh',
            'Manado',
            'Flores',
            'Jawa',
            'Sunda',
            'Batak',
            'Madura',
            'Betawi',
            'Minangkabau',
            'Bugis',
            'Melayu',
            'Arab',
            'Banten',
            'Banjar',
            'Bali',
            'Sasak',
            'Dayak',
            'Tionghoa',
            'Makassar',
            'Kaili',
            'Cirebon'
        ];

        foreach ($sukus as $suku) {
            DB::table('suku')->insert([
                'suku' => $suku,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
