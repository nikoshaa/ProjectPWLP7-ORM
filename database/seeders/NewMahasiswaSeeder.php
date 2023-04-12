<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'Nim' => 2141720007,
                'Nama' => 'Wildan Hafidz Mauludin',
                'Tanggal_Lahir' => '27 Mei 2002',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '081386964470',
                'Email' => '2141720007@polinema.ac.id'
            ],
            [
                'Nim' => 2141720022,
                'Nama' => 'Alvian Nur Firdaus',
                'Tanggal_Lahir' => '18 Mei 2003',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '081386964470',
                'Email' => '2141720022@polinema.ac.id'
            ],
            [
                'Nim' => 2141720037,
                'Nama' => 'Abdullah Azzam',
                'Tanggal_Lahir' => '17 Januari 2003',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '081386964470',
                'Email' => '2141720037@polinema.ac.id'
            ],
            [
                'Nim' => 2141720041,
                'Nama' => 'Yuliyana Rahmawati',
                'Tanggal_Lahir' => '11 Mei 2003',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '081386964470',
                'Email' => '2141720241@polinema.ac.id'
            ],
            [
                'Nim' => 2141720075,
                'Nama' => 'Alfi Surya Pratama',
                'Tanggal_Lahir' => '30 Mei 2003',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '081386964470',
                'Email' => '2141720075@polinema.ac.id'
            ],
            [
                'Nim' => 2141720161,
                'Nama' => 'Muhammad Endar Darmawan',
                'Tanggal_Lahir' => '22 Agustus 2003',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '081386964470',
                'Email' => '2141720161@polinema.ac.id'
            ],
        ];
        DB::table('mahasiswas')->insert($data);
    }
}