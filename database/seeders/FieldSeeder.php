<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('fields')->insert([
            'f_name' => '情報処理分野'
        ]);

        \DB::table('fields')->insert([
            'f_name' => 'AIテクノロジー分野'
        ]);

        \DB::table('fields')->insert([
            'f_name' => '電子制御分野'
        ]);
    }
}
