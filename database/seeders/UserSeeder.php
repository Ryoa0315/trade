<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '帆士',
            'Password' => 'aiueoaiueo',
            'Profile' => '大学三年生',
            'email' => 'a@a',
            'image' => '1',
        ]);
        
        DB::table('users')->insert([
            'name' => 'bさん',
            'Password' => 'aiueoaiueo',
            'Profile' => '大学三年生',
            'email' => 'b@b',
            'image' => '1',
        ]);
        
        DB::table('users')->insert([
            'name' => 'cさん',
            'Password' => 'aiueoaiueo',
            'Profile' => '大学三年生',
            'email' => 'c@c',
            'image' => '1',
        ]);
    }
}
