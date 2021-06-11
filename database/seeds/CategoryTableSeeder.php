<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = array(
            array("category_name" => "Hiburan", "slug" => "hiburan"),
            array("category_name" => "Kerajinan", "slug" => "kerajinan")
        );

        foreach ($categories as $category)
        {
            Category::create($category);
        }
    }
}