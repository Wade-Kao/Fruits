<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ItemsTableSeeder::class);
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // $this->call(User_listsTableSeeder::class);
        // DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
