<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('subject_table')->count() === 0) {
            DB::table('subject_table')->insert([
                [
                    'name' => 'Nguyen Van A',

                ],
                [
                    'name' => 'Chu Van An',
                ]
            ]);
        } else {
            echo 'Bảng subject_table đã có dữ liệu' . PHP_EOL;
        }
    }
}
