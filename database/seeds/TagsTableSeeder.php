<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'PHP',
            'Javascript',
            'C#',
            'news',
            'HTML5',
            'CSS3',
            'Angular',
            'Vuejs'
        ];
        foreach ($tags as $tag) {
            App\Tag::create([
                'name' => $tag
            ]);
        }
    }
}
