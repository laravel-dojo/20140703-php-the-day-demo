<?php

use Faker\Factory as Faker;

class PostTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->truncate();

        $faker = Faker::create();

        foreach(range(1, 10) as $index => $value)
        {
            Post::create([
                'title' => $faker->sentence(),
                'content' => $faker->text(400),
            ]);
        }
    }

}