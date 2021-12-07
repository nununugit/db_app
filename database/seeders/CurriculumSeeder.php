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
        \DB::table('curricula')->insert([
            'c_name' => '工業力学',
            'c_content' => '
            材料力学、流体力学、熱力学、機械力学は機械工学における四力学と呼ばれており、これらを学ぶためには土台として数学・力学などの基礎知識が必須となる。この授業では力学の基本原理と機械工学へ適用するための考え方を学ぶ。',
            't_id' => 4,
            'f_id' => 4
        ]);
    
        \DB::table('curricula')->insert([
            'c_name' => '計測工学',
            'c_content' => '物理的現象をどのように計測して取り扱うべきかを学ぶことを目的とする。前期には、計測の基本となるSI単位の成り立ちや誤差・精度の考え方とデータの一般的統計処理方法などを学ぶ。後期には、統計処理を用いた合理的なデータの取扱や計測された信号の処理方法と特徴について学ぶ。',
            't_id' => 3,
            'f_id' => 4
        ]);
    
        \DB::table('curricula')->insert([
            'c_name' => 'インターンシップ',
            'c_content' => '各コースの特色を持った実践的な「ものづくり」人材を育成するため、夏季休業中を中心に、５日
            以上、企業や大学・研究所などで「業務体験」を行う。学校で学んだ内容を活用し、現場の技術者
            たちの仕事を観察・体験して、自らの能力向上と、勉学・進路の指針とする。マッチングを重視し
            た事前・事後指導を行い、学生の企業選択・実習を支援する。',
            't_id' => 4,
            'f_id' => 5
        ]);

        \DB::table('curricula')->insert([
            'c_name' => 'コンピュータネットワーク',
            'c_content' => '現在の IT 技術に必須である通信を通して、情報の流れを理解るすことで、コンピュータネットワークの基本的な知識と技術を習得し、情報通信技術の基礎を学ぶ。将来的にCisco 認定資格 CCNA の合格を目指す。',
            't_id' => 3,
            'f_id' => 1
        ]);
    
        \DB::table('curricula')->insert([
            'c_name' => 'AI工学I',
            'c_content' => 'AIについて初歩的な学習ができる',
            't_id' => 3,
            'f_id' => 2
        ]);

        \DB::table('curricula')->insert([
            'c_name' => 'AI工学II',
            'c_content' => 'AIの基礎がしっかり身につく',
            't_id' => 3,
            'f_id' => 2
        ]);

        \DB::table('curricula')->insert([
            'c_name' => 'AI工学III',
            'c_content' => 'なんかすごくAIに詳しくなれる',
            't_id' => 3,
            'f_id' => 2
        ]);


        \DB::table('curricula')->insert([
            'c_name' => '電子制御基礎',
            'c_content' => '電子制御について初歩的な学習ができる',
            't_id' => 2,
            'f_id' => 3
        ]);


        \DB::table('curricula')->insert([
            'c_name' => '電子制御応用',
            'c_content' => '電子制御の基礎がしっかり身につく',
            't_id' => 2,
            'f_id' => 3
        ]);


        \DB::table('curricula')->insert([
            'c_name' => '電子制御基礎II',
            'c_content' => '電子制御について詳しくなれる',
            't_id' => 2,
            'f_id' => 3
        ]);

    }
}
