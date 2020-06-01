<?php

use Illuminate\Database\Seeder;

class BranchListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\BranchList::class, 10)->create();
    }
}
