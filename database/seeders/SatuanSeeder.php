<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('satuans')->insert([
            [
                'kodeSatuan' => '01',
                'namaSatuan' => 'Unit',
            ],
            [
                'kodeSatuan' => '02',
                'namaSatuan' => 'Buah',
            ],
            [
                'kodeSatuan' => '03',
                'namaSatuan' => 'Pasang',
            ],
            [
                'kodeSatuan' => '04',
                'namaSatuan' => 'Lembar',
            ],
            [
                'kodeSatuan' => '05',
                'namaSatuan' => 'Keping',
            ],
        ]);

    }
}
