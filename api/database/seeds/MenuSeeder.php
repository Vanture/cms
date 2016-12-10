<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->delete();
        App\Menu::create(['name' => 'Google', 'href' => 'http://google.com']);
        App\Menu::create(['name' => 'Wirtualna Polska', 'href' => 'http://wp.pl', 'isNewTab' => true]);
        App\Menu::create(['name' => 'Nested']);
        App\Menu::create(['name' => 'News 1', 'href' => 'news/1', 'parent_id' => 3]);
        App\Menu::create(['name' => 'Artykuł 1', 'href' => 'articles/1']);
        App\Menu::create(['name' => 'Artykuł 2', 'href' => 'articles/2']);
    }
}