<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchandises')->insert([
            'name' => 'アンパンマンのキーホルダー',
            'request' => 'バイキンマンのキーホルダー',
            'body' => 'アンパンマンのものを所持しておりバイキンマンのものと交換してほしい',
            'user_id' => 1,
            'title_id' => 1,
        ]);
    }
}
