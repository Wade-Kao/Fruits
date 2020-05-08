<?php

use App\User_list;
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
        User_list::truncate();
        User_list::create(['UId' => 'AD', 'UTimestamp' => '20151208000000']);
    }
}
