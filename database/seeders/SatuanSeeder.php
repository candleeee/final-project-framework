<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'Kode_Satuan'=> 'XL',
                'Nama_Satuan'=> 'Xtra Large',
            ],
            [
                'Kode_Satuan'=> 'L',
                'Nama_Satuan'=> 'Large',
            ],
            [
                'Kode_Satuan'=> 'S',
                'Nama_Satuan'=> 'Small',
            ],
        ]);

    }
}
