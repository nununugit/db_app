<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('teachers')->insert([
            't_name' => '柴崎年彦',
            't_content' => 'FDTD法を用いた研究で国際会議に参加し，導波管などの通信分野でいくつもの研究で学会発表にも参加している。
            教育面は，専攻科科目である電磁波工学特論を担当しており，ゼミナールや卒業研究，専攻科特別研究では電磁波工学関連のテーマで指導を行っている。',
        ]);
        \DB::table('teachers')->insert([
            't_name' => '浅川澄人',
            't_content' => '専門分野は，半導体工学・量子効果デバイス・回路解析である。
            化合物半導体共鳴トンネルダイオードという量子効果の一つであるトンネル効果を利用した半導体デバイスを研究の対象としている。
            教育面は，本科5年の授業である電子回路設計を担当しており，Arduino・ブレッドボード・各種センサなどを用いてIot機器の設計製作を指導している。',
        ]);
        \DB::table('teachers')->insert([
            't_name' => '横井健',
            't_content' => '専門分野は，情報科学・知能情報科学である。
            文章情報を対象として，その中に含まれている表立って見えないトピック（文章のテーマ）といったものを，計算機を使って解析することを研究テーマとしている。
            研究室としては，トピックに限らず文書情報を対象とした幅広いテーマで研究を実施している。
            ',
        ]);
        \DB::table('teachers')->insert([
            't_name' => '伊藤聡史',
            't_content' => '専門分野は，トライポロジー・機械応用力学である。
            トライポロジー（摩擦・摩耗・潤滑）に関する分野を中心に研究活動を行なっている。現在，AE計測を利用したフレッチング摩耗の監視や，新しい表面改良技術の開発に関する研究を行なっている。',
        ]);
    }
}
