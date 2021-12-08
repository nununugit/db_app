<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')->insert([
            'n_title' => 'NEWS1',
            'n_content' => 'NEWSのコンテンツ',
            'created_at' =>Carbon::now(),
        ]);
    
        \DB::table('news')->insert([
            'n_title' => 'NEWS2',
            'n_content' => 'NEWSのコンテンツ',
            'created_at' =>Carbon::now(),
        ]);
        
        \DB::table('news')->insert([
            'n_title' => 'NEWS3',
            'n_content' => 'NEWSのコンテンツ',
            'created_at' =>Carbon::now(),
        ]);

        \DB::table('news')->insert([
            'n_title' => 'NEWS4',
            'n_content' => 'NEWSのコンテンツ',
            'created_at' =>Carbon::now(),
        ]);
    }

}
