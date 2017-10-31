<?php

use Illuminate\Database\Seeder;

class SystemInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('system_infos')->delete();
        \DB::table('system_infos')->insert([
            0 => [
                'email' => 'isudesign@163.com',
                'address' => '杭州市上城区海运国际大厦',
                'phone' => '+86 0571-87550583',
                'qrcode' => ''
            ]
        ]);
    }
}
