<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(LaratrustSeeder::class);
//         $this->call(PostsTableSeeder::class);
//         $this->call(CategoriesTableSeeder::class);
//         $this->call(TagsTableSeeder::class);
//         $this->call(TagsPostsTableSeeder::class);
         $this->call(CategoriesPostsTableSeeder::class);
    }
}
