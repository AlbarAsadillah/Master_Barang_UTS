<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('barangs')->insert([
            [
                'kode' => '01',
                'nama' => 'Asus TUF',
                'harga'=> 7000000,
                'deskripsi' => 'Laptop',
                'satuan' => 1
            ],
            [
                'kode' => '02',
                'nama' => 'Meja',
                'harga'=> 700000,
                'deskripsi' => 'Meja',
                'satuan' => 2
            ],
            [
                'kode' => '03',
                'nama' => 'Kursi',
                'harga'=> 500000,
                'deskripsi' => 'Kursi',
                'satuan' => 3
            ],
        ]);

    }
}
