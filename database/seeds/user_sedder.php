<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class user_sedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'kabardesa@admin',
            'email' => 'admin@kabardesa.com',
            'password' => bcrypt('password'),
            'role' => 'Admin',
            'slug' => Str::slug('kabardesa@admin')
        ]);
    }
}
