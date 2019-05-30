<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Factory as Faker;

class TagsPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $posts = Post::all();
        $posts->each(function ($post) {
            $faker = Faker::create();
            $repeater = $faker->numberBetween(1, 8);
            $l = [];
            for ($i = 0; $i < $repeater; $i++) {
                $rdTagsId = $faker->numberBetween(1, 8);
                $l[$rdTagsId] = $post->id;
            }
            foreach ($l as $tagId => $postId)
                DB::table('tags_posts')->insert([
                    'tag_id' => $tagId,
                    'post_id' => $postId
                ]);

        });
    }
}
