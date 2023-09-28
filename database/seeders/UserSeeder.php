<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Dimas Wahyu',
                'username' => 'dimaswahyu18@gmail.com',
                'role_id' => 1,
                'email' => 'dimaswahyu18@gmail.com',
                'phone' => '087887773893',
                'password' => bcrypt('vendorvendor'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Admin',
                'username' => '000000',
                'role_id' => 2,
                'email' => 'admin@pins.co.id',
                'phone' => '081281803746',
                'password' => bcrypt('adminadmin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
