<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tentang')->insert([
            'nama' =>'Sistem Informasi Kabar Desa',
            'tagline' => 'Test',
            'email' => 'kaliboto@mail.com',
            'alamat' => 'Kaliboto, Kec. Mojogedang, Kab. Karanganyar',
            'telp' => '09999999',
            'kode' => 'KLBT0029872',
            'deskripsi' => 'lorem ipsum dolor' 
        ]);
    }
}
