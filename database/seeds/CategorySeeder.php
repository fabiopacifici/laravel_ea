<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Action', 'Adventure', 'Fantasy', 'Sport', 'Horror', 'Role', 'Family', 'Kids'];
        foreach ($categories as $category) {
            $cat = new Category();
            $cat->name = $category;
            $cat->slug = Str::slug($category);
            $cat->save();
        }

    }
}
