<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0; $i<=100 ; $i++):
            DB::table('items')->insert([
                'title' => $faker->paragraph,
                'description' => $faker->paragraph,
                'price' => $faker->numberBetween(100, 1000),
                'slug' => $faker->word,
                'url1' => $faker->imageUrl(300, 300),
                'url2' => $faker->imageUrl(300, 300),
                'url3' => $faker->imageUrl(300, 300),
                'url4' => $faker->imageUrl(300, 300)
            ]);

        endfor;
    }
}
