<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableFirst extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('table_first')->count() === 0) {
            DB::table('table_first')->insert([
                [
                    'name' => 'Nguyen Van A',
                    'phone' => '0987654132',
                    'age' => 20,
                    'gender' => 1,
                    'address' => 'Ha Noi',
                    'is_active' => 1,

                ],
                [
                    'name' => 'Chu Van An',
                    'phone' => '0123456789',
                    'age' => 30,
                    'gender' => 0,
                    'address' => 'HCM',
                    'is_active' => true,
                ]
            ]);
        } else {
            echo 'Bảng table_first đã có dữ liệu' . PHP_EOL;
        }
    }
}
