<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AdminMenuSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(MemberInfoTableSeeder::class);
         $this->call(PostTableSeeder::class);
         $this->call(RecordTableSeeder::class);
         $this->call(SystemInfoTableSeeder::class);
    }
}
