<?php

use Illuminate\Database\Seeder;

class RecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('records')->delete();

        \DB::table('records')->insert([
           0 => [
               'id' => 1,
               'name' => '德国红点设计奖',
               'english_name' => 'REDDOT',
               'ranking' => '传达设计大奖',
               'image' => 'upload/record/image/65b184b92e05afadfcfeb4735a140bdd.png',
               'date' => '2010'
           ],

            1 => [
                'id' => 2,
                'name' => '中国包装创意设计大赛',
                'english_name' => 'CREATIVE DESIGN OF CHINA PACKAGE',
                'ranking' => '金奖',
                'image' => 'upload/record/image/8ad7fc400ad1025bcd048e263984ce5a.png',
                'date' => '2010'
            ],
            2 => [
                'id' => 3,
                'name' => '中国包装创意设计大赛',
                'english_name' => 'CREATIVE DESIGN OF CHINA PACKAGE',
                'ranking' => '专业组一等奖',
                'image' => 'upload/record/image/cea6874b5e23aa249c5c30865edff311.png',
                'date' => '2014'
            ],
            3 => [
                'id' => 4,
                'name' => '中国执行设计奖暨中国包装设计奖',
                'english_name' => 'CHINA START DESIGN',
                'ranking' => '银奖',
                'image' => 'upload/record/image/67e726929f091f104c30210392ece133.png',
                'date' => '2015'
            ],
            4 => [
                'id' => 5,
                'name' => 'IF德国IF概念设计奖',
                'english_name' => '',
                'ranking' => 'IF奖',
                'image' => 'upload/record/image/57a5042d96b4fc6a2977d78dc36a8cde.png',
                'date' => '2010'
            ],
            5 => [
                'id' => 6,
                'name' => '中国设计智造大奖',
                'english_name' => 'DESIGN INTELLIGNC',
                'ranking' => '',
                'image' => 'upload/record/image/be884d0de051af651dfbc069ec0ed014.png',
                'date' => '2016'
            ],
            6 => [
                'id' => 7,
                'name' => '世界包装之星',
                'english_name' => 'WORLD STAR FOR PACKAGING',
                'ranking' => '主席奖',
                'image' => 'upload/record/image/bb05f60851deef63a9fba69662458e6f.png',
                'date' => '2015'
            ],
            7 => [
                'id' => 8,
                'name' => '光华龙腾奖',
                'english_name' => '',
                'ranking' => '中国设计业十大杰出青年',
                'image' => 'upload/record/image/f7949ee9beee0589ddc1c0e8357d72ba.png',
                'date' => '2016'
            ],
            8 => [
                'id' => '9',
                'name' => '设计专利1',
                'english_name' => '',
                'ranking' => '',
                'image' => 'upload/record/image/d93cff9cfc23a131d88d8f9565e745c1.png',
                'date' => ''
            ],
            9 => [
                'id' => '10',
                'name' => '设计专利2',
                'english_name' => '',
                'ranking' => '',
                'image' => 'upload/record/image/23a641e0726d28532e8c0ffde4eb78c6.png',
                'date' => ''
            ],
            10 => [
                'id' => '11',
                'name' => '设计专利3',
                'english_name' => '',
                'ranking' => '',
                'image' => 'upload/record/image/9d1f32777fbab66873b0902f72ba7128.png',
                'date' => ''
            ],
            11 => [
                'id' => '12',
                'name' => '设计专利4',
                'english_name' => '',
                'ranking' => '',
                'image' => 'upload/record/image/7666d83d454d80ae8dae5f655d163662.png',
                'date' => ''
            ],
            12 => [
                'id' => '13',
                'name' => '设计专利5',
                'english_name' => '',
                'ranking' => '',
                'image' => 'upload/record/image/f8fd55e84cc08010fd1294e08298c388.png',
                'date' => ''
            ],
            13 => [
                'id' => '14',
                'name' => '设计专利6',
                'english_name' => '',
                'ranking' => '',
                'image' => 'upload/record/image/d314c777bd36cf1491ead2c96c14f035.png',
                'date' => ''
            ],
            14 => [
                'id' => '15',
                'name' => '中国之星设计艺术大奖',
                'english_name' => 'CHINA STAR',
                'ranking' => '最佳设计奖',
                'image' => 'upload/record/image/8ca2cf897c784833cb2dc501e9429cd3.png',
                'date' => '2005'
            ],
            15 => [
                'id' => '16',
                'name' => '包装设计新星奖',
                'english_name' => '',
                'ranking' => '',
                'image' => 'upload/record/image/dcd77a459cafcf21612277e28ef9f3fb.png',
                'date' => '2003'
            ],
            16 => [
                'id' => '17',
                'name' => '包装设计新星奖',
                'english_name' => '',
                'ranking' => '',
                'image' => 'upload/record/image/5185037f11fff94c0447efcd67dbdfd4.png',
                'date' => '2009'
            ],
            17 => [
                'id' => '18',
                'name' => '包装设计新星奖',
                'english_name' => '',
                'ranking' => '',
                'image' => 'upload/record/image/13eb9586bbf5955ec24fdc45539dcb57.png',
                'date' => '2003'
            ],
            18 => [
                'id' => '19',
                'name' => '中南星奖',
                'english_name' => '',
                'ranking' => '银奖',
                'image' => 'upload/record/image/61eae2e253665f7fb8bfca180137155b.png',
                'date' => '2003'
            ],
            19 => [
                'id' => '20',
                'name' => '创新顺德国际工业设计大赛',
                'english_name' => '',
                'ranking' => '银奖',
                'image' => 'upload/record/image/40e56a460cc06f3e93891d2385ddd30b.png',
                'date' => '2009'
            ],
            20 => [
                'id' => '21',
                'name' => '中国之星设计奖',
                'english_name' => 'CHINA STAR DESIGN',
                'ranking' => '中国包装设计奖 银奖',
                'image' => 'upload/record/image/77054a87a164b0f8971d105641adf107.png',
                'date' => '2015'
            ],
            21 => [
                'id' => '22',
                'name' => '世界包装之星',
                'english_name' => 'WOELDSTAR FOR PACKAGINC',
                'ranking' => '最高奖 中国首个主席奖',
                'image' => 'upload/record/image/d4df659fae1800b3b55ea26d80a4ac60.png',
                'date' => '2015'
            ],
            22 => [
                'id' => '23',
                'name' => '世界包装之星',
                'english_name' => 'WOELDSTAR FOR PACKAGINC',
                'ranking' => '最高奖 主席奖',
                'image' => 'upload/record/image/1c3628daefb2c9dabdd71a1d87b6561a.png',
                'date' => '2015'
            ],
            23 => [
                'id' => '24',
                'name' => '世界包装之星',
                'english_name' => 'WOELDSTAR FOR PACKAGINC',
                'ranking' => '最高奖 主席奖',
                'image' => 'upload/record/image/7f185fa62ac913359565dbfef6a0b042.png',
                'date' => '2015'
            ],
            24 => [
                'id' => '25',
                'name' => '第二届 楚天工业设计大赛',
                'english_name' => '',
                'ranking' => '三等奖',
                'image' => 'upload/record/image/008d8d5404bca368a8927094f46c95fa.png',
                'date' => ''
            ],
            25 => [
                'id' => '26',
                'name' => '第五届 安华杯中国包装品牌与创新大赛',
                'english_name' => '',
                'ranking' => '原创力奖',
                'image' => 'upload/record/image/6923cbb719cdee81189a2e3df1fdcc43.png',
                'date' => ''
            ],
            26 => [
                'id' => '27',
                'name' => '第五届 安华杯中国包装品牌与创新大赛',
                'english_name' => '',
                'ranking' => '银奖',
                'image' => 'upload/record/image/cb8b31e1dbed1bad32179d165e836fd4.png',
                'date' => ''
            ],
            27 => [
                'id' => '28',
                'name' => '华东大赛',
                'english_name' => '',
                'ranking' => '金奖',
                'image' => 'upload/record/image/955667bbae45990f7e30c593f3cfa9eb.png',
                'date' => ''
            ]
        ]);
    }
}
