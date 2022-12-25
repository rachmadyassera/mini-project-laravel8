<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@sepatumonza.com',
            'password' => bcrypt('1234')
        ]);
        DB::table('users')->insert([
            'name' => 'Zuhri',
            'role' => 'member',
            'email' => 'zuhri@gmail.com',
            'password' => bcrypt('1234')
        ]);
        DB::table('users')->insert([
            'name' => 'Adni',
            'role' => 'admin',
            'email' => 'adni@gmail.com',
            'password' => bcrypt('1234')
        ]);
    }
}
