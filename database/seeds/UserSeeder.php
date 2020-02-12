<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('user')->insert([
        	'Nama' => 'hororo',
        	'Alamat' => 'malang',
        	'Jenis_Kelamin' => 'cowo',
        	'Jurusan' => 'ti',
        	'Image' => 'a.jpg'
        ]);
        
    }
}
