<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function slugify($text) : string
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
    public function run()
    {
        $faker = Faker::create();
        $limit = 20;
        for($i =0; $i < $limit; $i++){
            $title = $faker->text(80);
            App\Post::create([
                'title' => $title,
                'content'=> $faker->paragraph(20),
                'slug' => PostsTableSeeder::slugify($title),
                'author_id' => $faker->numberBetween(1,8),
                'time_to_read' => $faker->numberBetween(1,100) . ' mins',
            ]);
        }
    }
}
