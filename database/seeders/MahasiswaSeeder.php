<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'name' => 'akbar',
            'gender' => 'Laki-laki',
            'alamat' => 'Kediri',
            'foto' => 'https://i.ibb.co/wNCWF7x/abun.jpg'
            ]);

        DB::table('mahasiswa')->insert([
            'name' => 'amal',
            'gender' => 'Perempuan',
            'alamat' => 'Kediri',
            'foto' => 'https://i.ibb.co/wNCWF7x/amal.jpg'
            ]);
    }
}
