<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Ani',
            'nomer_induk' => '12345',
            'alamat' => 'palembang',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Adi',
            'nomer_induk' => '2345',
            'alamat' => 'plaju',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Asi',
            'nomer_induk' => '1245',
            'alamat' => 'palembng',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
