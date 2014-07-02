<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        foreach(range(1, 10) as $value)
        {
            Post::create([
                'title'   => 'My Post Title' . $value,
                'content' => 'My Post Content',
            ]);
        }
    }

}