<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the number of blogs you want to create
        $numberOfBlogs = 10;

        // Create sample blogs
        for ($i = 1; $i <= $numberOfBlogs; $i++) {
            DB::table('blogs')->insert([
                'blog_title' => 'وبلاگ نمونه ' . $i,
                'blog_category' => 'دسته بندی نمونه ' . $i,
                'blog_slug' => Str::slug('وبلاگ نمونه ' . $i),
                'blog_body' => 'این متن مطلب وبلاگ نمونه ' . $i . ' است.',
                'blog_main_image' => 'تصویر_نمونه_' . $i . '.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
