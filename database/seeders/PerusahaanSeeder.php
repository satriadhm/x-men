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
                'kelas_bumn' => '',
                'id_klaster' => 1, // Assuming Asuransi dan Dana Pensiun has ID 1
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Asuransi Jiwasraya (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 1, // Assuming Asuransi dan Dana Pensiun has ID 1
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Bahana Pembinaan Usaha Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 1, // Assuming Asuransi dan Dana Pensiun has ID 1
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Kliring Berjangka Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 1, // Assuming Asuransi dan Dana Pensiun has ID 1
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Reasuransi Indonesia Utama (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 1, // Assuming Asuransi dan Dana Pensiun has ID 1
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Taspen (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 1, // Assuming Asuransi dan Dana Pensiun has ID 1
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Energy Management Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 2, // Assuming Industri Energi Migas has ID 2
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pertamina (Persero)',
                'kelas_bumn' => 'kelas_1',
                'id_klaster' => 2, // Assuming Industri Energi Migas has ID 2
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Perusahaan Listrik Negara (Persero)',
                'kelas_bumn' => 'kelas_1',
                'id_klaster' => 2, // Assuming Industri Energi Migas has ID 2
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT BioFarma (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Industri Nuklir Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Indonesia Asahan Aluminium (Persero)',
                'kelas_bumn' => 'kelas_2',
                'id_klaster' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Krakatau Steel (Persero) Tbk',
                'kelas_bumn' => 'kelas_3',
                'id_klaster' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Bank Mandiri (Persero) Tbk',
                'kelas_bumn' => 'kelas_1',
                'id_klaster' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Bank Negara Indonesia (Persero) Tbk',
                'kelas_bumn' => 'kelas_1',
                'id_klaster' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Bank Rakyat Indonesia (Persero) Tbk',
                'kelas_bumn' => 'kelas_1',
                'id_klaster' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Bank Tabungan Negara (Persero) Tbk',
                'kelas_bumn' => 'kelas_2',
                'id_klaster' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Danareksa (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pegadaian (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pegadaian (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pengembangan Armada Niaga Nasional (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Permodalan Nasional Madani (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Perusahaan Pengelola Aset (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Jakarta Industrial Estate Pulogadung',
                'kelas_bumn' => '',
                'id_klaster' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Surabaya Industrial Estate Rungkut',
                'kelas_bumn' => '',
                'id_klaster' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'Perum Jasa Tirta I',
                'kelas_bumn' => '',
                'id_klaster' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'Perum Jasa Tirta II',
                'kelas_bumn' => '',
                'id_klaster' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Hotel Indonesia Natour (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Kawasan Berikat Nusantara (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Kawasan Industri Makassar (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Kawasan Industri Medan (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Kawasan Industri Wijayakusuma (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT PDI Pulau Batam (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pengembangan Pariwisata Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pos Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Sarinah (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT TWC BP dan RB (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Varuna Tirta Prakasya (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'Perum Perumnas',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Adhi Karya (Persero) Tbk',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Amarta Karya (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Bina Karya (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Brantas Abipraya (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Hutama Karya (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Indah Karya (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Indra Karya (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Istaka Karya (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pembangunan Perumahan (Persero) Tbk',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Semen Baturaja (Persero) Tbk',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Semen Indonesia (Persero) Tbk',
                'kelas_bumn' => 'kelas_2',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Semen Kupang (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Virama Karya (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Waskita Karya (Persero) Tbk',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Wijaya Karya (Persero) Tbk',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Yodya Karya (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'Perum Perhutani',
                'kelas_bumn' => '',
                'id_klaster' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Perkebunan Nusantara III (Persero)',
                'kelas_bumn' => 'kelas_2',
                'id_klaster' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Barata Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Biro Klasifikasi Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Boma Bisma Indra (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Dahana (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Dirgantara Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Dok dan Perkapalan Kodja Bahari (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Dok dan Perkapalan Surabaya (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Industri Gelas (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Industri Kapal Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Industri Kereta Api (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Industri Sandang Nusantara (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Kertas Kraft Aceh (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Kertas Leces (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT LEN Industri (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT PAL Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pindad (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Primissima (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Sucofindo (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Surveyor Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'Perum Bulog',
                'kelas_bumn' => 'kelas_2',
                'id_klaster' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'Perum Perikanan indonesia',
                'kelas_bumn' => '',
                'id_klaster' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Garam (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Perikanan Nusantara (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pertani (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Perusahaan Perdagangan Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pupuk Indonesia Holding Company (Persero)',
                'kelas_bumn' => 'kelas_2',
                'id_klaster' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Sang Hyang Seri (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'Perum Damri',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'Perum LPPNPI',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'Perum PPD',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Angkasa Pura I (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Angkasa Pura II (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT ASDP Indonesia Ferry (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Djakarta Lloyd (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Garuda Indonesia (Persero) Tbk',
                'kelas_bumn' => 'kelas_2',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Jasa Marga (Persero) Tbk',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pelabuhan Indonesia I (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pelabuhan Indonesia II (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pelabuhan Indonesia III (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pelabuhan Indonesia IV (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Pelayaran Nasional Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Survai Udara Penas (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'Perum Lembaga Kantor Berita Nasional Antara',
                'kelas_bumn' => '',
                'id_klaster' => 13,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'Perum Percetakan Negara Republik Indonesia',
                'kelas_bumn' => '',
                'id_klaster' => 13,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'Perum Percetakan Uang Republik Indonesia',
                'kelas_bumn' => '',
                'id_klaster' => 13,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'Perum Produksi Film Negara',
                'kelas_bumn' => '',
                'id_klaster' => 13,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Balai Pustaka (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 13,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Industri Telekomunikasi Indonesia (Persero)',
                'kelas_bumn' => '',
                'id_klaster' => 13,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_perusahaan' => 'PT Telekomunikasi Indonesia (Persero) Tbk ',
                'kelas_bumn' => 'kelas_1',
                'id_klaster' => 13,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($perusahaan as $data) {
            DB::table('perusahaan')->insert($data);
        }
    }
}
