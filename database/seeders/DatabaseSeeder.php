<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Writer;
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
        Admin::create([
            "username" => "admin",
            "password" => "admin",
        ]);
        
    
        Writer::create([
            "first_name" => "Aaron",
            "middle_name" => "Dalangpan",
            "last_name" => "Monares",
            "gender" => "Male",
            "email" => "test@gmail.com",
            "password" => "12345",
            "writer_restriction" => "1"
        ]);

        Writer::create([
            "first_name" => "Jeff",
            "middle_name" => "Dalangpan",
            "last_name" => "Detalo",
            "gender" => "Male",
            "email" => "test@gmail.com",
            "password" => "12345",
            "writer_restriction" => "0"
        ]);


        Category::create([
            "type" => "Business Blog",
            "restriction" => "Business Blog Only",
        ]);

        Category::create([
            "type" => "Cosmetic Blog",
            "restriction" => "Cosmetic Blog Only",
        ]);

        Category::create([
            "type" => "Food Blog",
            "restriction" => "Food Blog Only",
        ]);

        Category::create([
            "type" => "Travel Blog",
            "restriction" => "Travel Blog Only",
        ]);

        Category::create([
            "type" => "All",
            "restriction" => "All Blogs",
        ]);

        $writer = Writer::first();
        $writer->posts()->create([
            "title" => "Food Blog",
            "photo" => "no photo",
            "video" => "no video",
            "text" => "This my first Blog",
            "time" => "09:00",
        ]);
        
        $category = Category::find(1);
        $get_post_id = Post::orderBy('id', 'desc')->first()->id;
        $category->posts()->attach($get_post_id);

        Comment::create([
            "text" => "Nice Blog",
            "time" => "09:00",
            "post_id" => 1,
            "writer_id" => 2
        ]);
    }
}
