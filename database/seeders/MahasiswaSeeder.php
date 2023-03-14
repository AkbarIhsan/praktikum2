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
            'name' => 'Akbar',
            'gender' => 'Laki-laki',
            'alamat' => 'Kediri',
            'foto' => 'https://i.ibb.co/wNCWF7x/abun.jpg'
            ]);
    }
}
