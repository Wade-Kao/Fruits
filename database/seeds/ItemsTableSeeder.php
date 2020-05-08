<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create('zh_TW');

        Item::truncate();
        //下方移至ItemFactory
        // for ($i = 0; $i < 10; $i++) {
        //     Item::create(['title' => $faker->name,
        //         'price' => $faker->numberBetween($min = 100, $max = 900),
        //         'size' => $faker->word,
        //         'enabled' => $faker->boolean,
        //         'pic' => $faker->imageUrl($width = 640, $height = 480)]);
        // }

        //改下方指令
        factory(Item::class, 100)->create();
    }
}
