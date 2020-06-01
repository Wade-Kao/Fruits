<?php

use App\ListUser;
use Illuminate\Database\Seeder;

class User_listsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ListUser::class, 10)->create();
        // User_list::truncate();
        // User_list::create(['UId' => 'AD', 'UTimestamp' => '20151208000000']);
    }
}
