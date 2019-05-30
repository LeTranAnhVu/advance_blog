<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = [
            'lap trinh',
            'doi song',
            'tin tuc',
            'du lich',
            'chuyen nghe dev',
            'game',
            'tuoi tre'
        ];
       foreach ($cats as $cat) {
           App\Category::create([
               'name' => $cat
           ]);
       }
    }
}
