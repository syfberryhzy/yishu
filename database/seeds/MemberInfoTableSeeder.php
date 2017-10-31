<?php

use Illuminate\Database\Seeder;

class MemberInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('member_infos')->delete();
        \DB::table('member_infos')->insert([
           0 => [
               'id' => 1,
               'name' => '郭沁',
               'job'  => '首席设计总监',
               'avatar' => 'upload/member_info/avatar/1dd5ddef503927b76b24100659aa4f4a.png'
           ],
            1 => [
                'id' => 2,
                'name' => '方泽飞',
                'job'  => '创意设计总监',
                'avatar' => 'upload/member_info/avatar/3e2c7d7f0a576b45082424b66c258ae5.png'
            ],
            2 => [
                'id' => 3,
                'name' => '严墙',
                'job'  => '首席设计总监',
                'avatar' => 'upload/member_info/avatar/507bbab67542ba7c3782a0609a4a8cc2.png'
            ],
            3 => [
                'id' => 4,
                'name' => '安坤',
                'job'  => 'UED设计师',
                'avatar' => 'upload/member_info/avatar/4a2919980fa5f2f5f88bc3e67207f0c9.png'
            ],
            4 => [
                'id' => 5,
                'name' => '杨涵韵',
                'job'  => '天猫设计总监',
                'avatar' => 'upload/member_info/avatar/1290a4cbd8613ebc20c8beba42f68b8d.png'
            ],
            5 => [
                'id' => 6,
                'name' => '薛让',
                'job'  => '视觉动效设计师',
                'avatar' => 'upload/member_info/avatar/3215347ece00af709d6150bb26d74652.png'
            ],

        ]);
    }
}
