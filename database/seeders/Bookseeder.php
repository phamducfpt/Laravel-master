<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'bookid' => 1,
                'authorid' => 'sach1',
                'title' => 'aa',
                'iSBN' => 'fpt',
                'pub_year'=> Carbon::now()->addDays(1),
                'available' => '4',
            ],[
                'bookid' => 2,
                'authorid' => 'sach3',
                'title' => 'aa',
                'iSBN' => 'fpt',
                'pub_year'=> Carbon::now()->addDays(1),
                'available' => '4',
            ],[
                'bookid' => 3,
                'authorid' => 'sach3',
                'title' => 'aa',
                'iSBN' => 'fpt',
                'pub_year'=> Carbon::now()->addDays(1),
                'available' => '4',
            ],[
                'bookid' => 4,
                'authorid' => 'sach4',
                'title' => 'aa',
                'iSBN' => 'fpt',
                'pub_year'=> Carbon::now()->addDays(1),
                'available' => '4',
            ],[
                'bookid' => 4,
                'authorid' => 'sach4',
                'title' => 'aa',
                'iSBN' => 'fpt',
                'pub_year'=> Carbon::now()->addDays(1),
                'available' => '4',
            ],
        ]);
        //
    }
}
