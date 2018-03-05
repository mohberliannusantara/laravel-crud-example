<?php

use Illuminate\Database\Seeder;
use \App\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            Siswa::create([
                'nama' => 'siswa ' . $i,
                'jklm' => $i % 2,
                'id_jurusan' => $i
            ]);
        }
    }
}
