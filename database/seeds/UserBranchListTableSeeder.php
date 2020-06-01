<?php

use Illuminate\Database\Seeder;

class UserBranchListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\BranchListUser::class, 10)->create();
    }
}
