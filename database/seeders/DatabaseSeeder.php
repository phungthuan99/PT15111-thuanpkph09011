<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Subject;
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
        Student::factory(10)->create();
        Student::factory(20)->create();
        // $this->call([
        //     TableFirst::class,
        //     SubjectTableSeeder::class,
        //     ThuanSeeder::class,
        // ]);
    }
}
