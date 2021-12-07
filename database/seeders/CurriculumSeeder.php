<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i_i=1 ;$i_i<4 ;$i_i++) {
            for($i=1 ;$i<4 ;$i++) {
                \DB::table('curricula')->insert([
                    'c_name' => 'test'.$i,
                    'c_content' => 'test_content'.$i,
                    't_id' => $i,
                    'f_id' => $i_i
                ]);
            }
        }
    }
}
