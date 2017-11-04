<?php

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('banners')->delete();
        \DB::table('banners')->insert([
           0 => [
               'id' => 1,
               'category_id' => 13,
               'image' => '',
           ],
           1 => [
               'id' => 2,
               'category_id' => 1,
               'image' => 'upload/webindex/image/ff206efe7e11de258522df682040c0f0.jpeg',
           ],
           2 => [
               'id' => 3,
               'category_id' => 2,
               'image' => 'upload/webindex/image/ff206efe7e11de258522df682040c0f0.jpeg',
           ],
           3 => [
               'id' => 4,
               'category_id' => 3,
               'image' => 'upload/webindex/image/ff206efe7e11de258522df682040c0f0.jpeg',
           ],
           4 => [
               'id' => 5,
               'category_id' => 4,
               'image' => 'upload/webindex/image/ff206efe7e11de258522df682040c0f0.jpeg',
           ],
           5 => [
               'id' => 6,
               'category_id' => 5,
               'image' => 'upload/webindex/image/ff206efe7e11de258522df682040c0f0.jpeg',
           ]
        ]);
    }
}
