<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemesans')->insert([
            'nama' => 'Lukman Nur Hakim',
            'email' => 'lukmanswanz12@gmail.com',
            'destinasi' => 'santolo',
            'tanggal' => '2023-07-06',
            'jumlahtkt' => '3',
        ]);
    }
}
