<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Factory as Faker;
class CategoriesPostsTableSeeder extends Seeder
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
            // categories length
            $repeater = $faker->numberBetween(1, 7);
            $l = [];
            for ($i = 0; $i < $repeater; $i++) {
                $rdCategoriesId = $faker->numberBetween(1, 7);
                $l[$rdCategoriesId] = $post->id;
            }
            foreach ($l as $rdCategoriesId => $postId)
                DB::table('categories_posts')->insert([
                    'category_id' => $rdCategoriesId,
                    'post_id' => $postId
                ]);

        });
    }
}
