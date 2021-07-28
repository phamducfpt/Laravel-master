<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('customers')->truncate();
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'Chinh',
                'address' => 'Cau Giay',
                'created_at' => Carbon::now()->addDays(1)
            ], [
                'id' => 2,
                'name' => 'Trang',
                'address' => 'Nam Tu Liem',
                'created_at' => Carbon::now()->addDays(1)
            ], [
                'id' => 3,
                'name' => 'Quynh',
                'address' => 'Cau Giay',
                'created_at' => Carbon::now()->addDays(1)
            ], [
                'id' => 4,
                'name' => 'Chinh',
                'address' => 'My Dinh',
                'created_at' => Carbon::now()->addDays(1)
            ], [
                'id' => 5,
                'name' => 'Anh',
                'address' => 'ton that thuyet',
                'created_at' => Carbon::now()->addDays(1)
            ]
        ]);
        //
    }
}
