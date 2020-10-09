<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Category_Post;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use SubjectTable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Student::factory(10)->create();
        Post::factory(10)->create();
        Category::factory(10)->create();
        Category_Post::factory(10)->create();
        Comment::factory(10)->create();
        // $this->call([
        //     TableFirst::class,
        //     SubjectTableSeeder::class,
        //     ThuanSeeder::class,
        // ]);
    }
}
