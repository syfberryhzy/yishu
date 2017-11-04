<?php

use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('records')->delete();
        
        \DB::table('records')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '德国红点设计奖',
                'english_name' => 'REDDOT',
                'ranking' => '传达设计大奖',
                'date' => '2010',
                'image' => 'upload/record/image/65b184b92e05afadfcfeb4735a140bdd.png',
                'created_at' => NULL,
                'updated_at' => '2017-10-21 13:13:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '中国包装创意设计大赛',
                'english_name' => 'CREATIVE DESIGN OF CHINA PACKAGE',
                'ranking' => '金奖',
                'date' => '2010',
                'image' => 'upload/record/image/8ad7fc400ad1025bcd048e263984ce5a.png',
                'created_at' => NULL,
                'updated_at' => '2017-10-21 13:16:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '中国包装创意设计大赛',
                'english_name' => 'CREATIVE DESIGN OF CHINA PACKAGE',
                'ranking' => '专业组一等奖',
                'date' => '2014',
                'image' => 'upload/record/image/cea6874b5e23aa249c5c30865edff311.png',
                'created_at' => NULL,
                'updated_at' => '2017-10-21 13:17:26',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '中国执行设计奖暨中国包装设计奖',
                'english_name' => 'CHINA START DESIGN',
                'ranking' => '银奖',
                'date' => '2015',
                'image' => 'upload/record/image/67e726929f091f104c30210392ece133.png',
                'created_at' => NULL,
                'updated_at' => '2017-10-21 13:18:07',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'IF德国IF概念设计奖',
                'english_name' => NULL,
                'ranking' => 'IF奖',
                'date' => '2010',
                'image' => 'upload/record/image/57a5042d96b4fc6a2977d78dc36a8cde.png',
                'created_at' => NULL,
                'updated_at' => '2017-10-21 13:18:28',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '中国设计智造大奖',
                'english_name' => 'DESIGN INTELLIGNC',
                'ranking' => NULL,
                'date' => '2016',
                'image' => 'upload/record/image/c9c1f15c62392f09a8e73f0899affd3a.png',
                'created_at' => NULL,
                'updated_at' => '2017-11-03 09:33:55',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '世界包装之星',
                'english_name' => 'WORLD STAR FOR PACKAGING',
                'ranking' => '主席奖',
                'date' => '2015',
                'image' => 'upload/record/image/bb05f60851deef63a9fba69662458e6f.png',
                'created_at' => NULL,
                'updated_at' => '2017-10-21 13:23:08',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '光华龙腾奖',
                'english_name' => NULL,
                'ranking' => '中国设计业十大杰出青年',
                'date' => '2016',
                'image' => 'upload/record/image/f7949ee9beee0589ddc1c0e8357d72ba.png',
                'created_at' => NULL,
                'updated_at' => '2017-10-21 13:24:20',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '设计专利1',
                'english_name' => NULL,
                'ranking' => NULL,
                'date' => NULL,
                'image' => 'upload/record/image/d93cff9cfc23a131d88d8f9565e745c1.png',
                'created_at' => NULL,
                'updated_at' => '2017-10-21 13:28:07',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '设计专利2',
                'english_name' => NULL,
                'ranking' => NULL,
                'date' => NULL,
                'image' => 'upload/record/image/23a641e0726d28532e8c0ffde4eb78c6.png',
                'created_at' => '2017-10-21 13:30:54',
                'updated_at' => '2017-10-21 13:30:54',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '设计专利3',
                'english_name' => NULL,
                'ranking' => NULL,
                'date' => NULL,
                'image' => 'upload/record/image/9d1f32777fbab66873b0902f72ba7128.png',
                'created_at' => '2017-10-21 13:31:39',
                'updated_at' => '2017-10-21 13:31:39',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '设计专利4',
                'english_name' => NULL,
                'ranking' => NULL,
                'date' => NULL,
                'image' => 'upload/record/image/7666d83d454d80ae8dae5f655d163662.png',
                'created_at' => '2017-10-21 13:36:15',
                'updated_at' => '2017-10-21 13:38:45',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '设计专利5',
                'english_name' => NULL,
                'ranking' => NULL,
                'date' => NULL,
                'image' => 'upload/record/image/f8fd55e84cc08010fd1294e08298c388.png',
                'created_at' => '2017-10-21 13:38:25',
                'updated_at' => '2017-10-21 13:38:25',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '设计专利6',
                'english_name' => NULL,
                'ranking' => NULL,
                'date' => NULL,
                'image' => 'upload/record/image/d314c777bd36cf1491ead2c96c14f035.png',
                'created_at' => '2017-10-21 13:42:22',
                'updated_at' => '2017-10-21 13:42:22',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '中国之星设计艺术大奖',
                'english_name' => 'CHINA STAR',
                'ranking' => '最佳设计奖',
                'date' => '2005',
                'image' => 'upload/record/image/8ca2cf897c784833cb2dc501e9429cd3.png',
                'created_at' => '2017-10-21 13:44:41',
                'updated_at' => '2017-10-21 13:44:41',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '包装设计新星奖',
                'english_name' => NULL,
                'ranking' => NULL,
                'date' => '2003',
                'image' => 'upload/record/image/dcd77a459cafcf21612277e28ef9f3fb.png',
                'created_at' => '2017-10-21 13:47:12',
                'updated_at' => '2017-10-21 13:47:12',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '包装设计新星奖',
                'english_name' => NULL,
                'ranking' => NULL,
                'date' => '2009',
                'image' => 'upload/record/image/5185037f11fff94c0447efcd67dbdfd4.png',
                'created_at' => '2017-10-21 13:48:03',
                'updated_at' => '2017-10-21 13:48:03',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => '包装设计新星奖',
                'english_name' => NULL,
                'ranking' => NULL,
                'date' => '2003',
                'image' => 'upload/record/image/13eb9586bbf5955ec24fdc45539dcb57.png',
                'created_at' => '2017-10-21 13:52:46',
                'updated_at' => '2017-10-21 13:52:46',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => '中南星奖',
                'english_name' => NULL,
                'ranking' => '银奖',
                'date' => '2003',
                'image' => 'upload/record/image/61eae2e253665f7fb8bfca180137155b.png',
                'created_at' => '2017-10-21 13:54:49',
                'updated_at' => '2017-10-21 13:54:49',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => '创新顺德国际工业设计大赛',
                'english_name' => NULL,
                'ranking' => '银奖',
                'date' => '2009',
                'image' => 'upload/record/image/40e56a460cc06f3e93891d2385ddd30b.png',
                'created_at' => '2017-10-21 13:55:53',
                'updated_at' => '2017-10-21 13:55:53',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => '中国之星设计奖',
                'english_name' => 'CHINA STAR DESIGN',
                'ranking' => '中国包装设计奖 银奖',
                'date' => '2015',
                'image' => 'upload/record/image/77054a87a164b0f8971d105641adf107.png',
                'created_at' => '2017-10-21 14:07:42',
                'updated_at' => '2017-10-21 14:07:42',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => '世界包装之星',
                'english_name' => 'WOELDSTAR FOR PACKAGINC',
                'ranking' => '最高奖 中国首个主席奖',
                'date' => '2015',
                'image' => 'upload/record/image/d4df659fae1800b3b55ea26d80a4ac60.png',
                'created_at' => '2017-10-21 14:09:51',
                'updated_at' => '2017-10-21 14:09:51',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => '世界包装之星',
                'english_name' => 'WOELDSTAR FOR PACKAGINC',
                'ranking' => '最高奖 主席奖',
                'date' => '2015',
                'image' => 'upload/record/image/1c3628daefb2c9dabdd71a1d87b6561a.png',
                'created_at' => '2017-10-21 14:12:30',
                'updated_at' => '2017-10-21 14:12:30',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => '世界包装之星',
                'english_name' => 'WOELDSTAR FOR PACKAGINC',
                'ranking' => '最高奖 主席奖',
                'date' => '2015',
                'image' => 'upload/record/image/7f185fa62ac913359565dbfef6a0b042.png',
                'created_at' => '2017-10-21 14:13:47',
                'updated_at' => '2017-10-21 14:13:47',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => '第二届 楚天工业设计大赛',
                'english_name' => NULL,
                'ranking' => '三等奖',
                'date' => NULL,
                'image' => 'upload/record/image/008d8d5404bca368a8927094f46c95fa.png',
                'created_at' => '2017-10-21 14:14:45',
                'updated_at' => '2017-10-21 14:14:45',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => '第五届 安华杯中国包装品牌与创新大赛',
                'english_name' => NULL,
                'ranking' => '原创力奖',
                'date' => NULL,
                'image' => 'upload/record/image/6923cbb719cdee81189a2e3df1fdcc43.png',
                'created_at' => '2017-10-21 14:16:32',
                'updated_at' => '2017-10-21 14:16:32',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => '第五届 安华杯中国包装品牌与创新大赛',
                'english_name' => NULL,
                'ranking' => '银奖',
                'date' => NULL,
                'image' => 'upload/record/image/cb8b31e1dbed1bad32179d165e836fd4.png',
                'created_at' => '2017-10-21 14:17:51',
                'updated_at' => '2017-10-21 14:17:51',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => '华东大赛',
                'english_name' => NULL,
                'ranking' => '金奖',
                'date' => NULL,
                'image' => 'upload/record/image/955667bbae45990f7e30c593f3cfa9eb.png',
                'created_at' => '2017-10-21 14:18:14',
                'updated_at' => '2017-10-21 14:18:14',
            ),
        ));
        
        
    }
}